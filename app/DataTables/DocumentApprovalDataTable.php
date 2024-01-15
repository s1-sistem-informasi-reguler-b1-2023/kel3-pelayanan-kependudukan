<?php

namespace App\DataTables;

use App\Models\Document;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class DocumentApprovalDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->setRowId('id')
            ->editColumn('document_template_id', function ($dokumen) {
                return $dokumen->documentTemplate->nama_dokumen;
            })
            ->editColumn('user_id', function ($dokumen) {
                return $dokumen->user->name;
            })
            ->addColumn('action', function (Document $document) {
                return "<div class=\"d-flex\">
                <a href=\"" . route('documents.approval-show', $document->id) . "\" class=\"btn btn-success btn-sm mr-1\"><i
                        class=\"fas fa-eye\"></i></a>
            </div>";
            })
            ->addColumn('status', function (Document $document) {
                $jmlApproval = $document->documentApprovals->count();
                $jmlTemplateApproval = $document->documentTemplate->documentTemplateApprovals->count();

                $approvalTerakhir = $document->documentApprovals->last();

                if ($approvalTerakhir->type == 'REJECTED') {
                    return "<div class=\"badge badge-danger\">Di Tolak</div>";
                } else {
                    if ($jmlApproval == $jmlTemplateApproval)
                        return "<div class=\"badge badge-success\">Selesai</div>";
                    else
                        return "<div class=\"badge badge-warning\">Dalam Proses</div>";

                }
            })
            ->rawColumns(['action', 'status']);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Document $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('documentapproval-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->orderBy(1);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('row_number')
                ->title('#')
                ->render('meta.row + meta.settings._iDisplayStart + 1;')
                ->width(50)
                ->orderable(false)
                ->searchable(false),
            Column::make('user_id')->title('Nama Pengaju'),
            Column::make('document_template_id')->title('Nama Dokumen'),
            Column::make('justifikasi')->title('Justifikasi'),
            Column::make('status'),
            Column::make('action'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'DocumentApproval_' . date('YmdHis');
    }
}
