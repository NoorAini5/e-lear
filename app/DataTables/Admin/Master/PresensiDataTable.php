<?php

namespace App\DataTables\Admin\Master;

use App\Models\tm_presensi;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class PresensiDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->setRowId(function ($row) {
                return $row->id;
            })

            ->addColumn('action', function ($row) {
                $btn = '<div class="btn-group">';
                $btn = $btn . '<a href="' . route('admin.master-data.tmpresensi.edit', $row->id) . '" class="btn btn-dark buttons-edit"><i class="fas fa-edit"></i></a>';
                $btn = $btn . '<a href="' . route('admin.master-data.tmpresensi.destroy', $row->id) . '" class="btn btn-danger buttons-delete"><i class="fas fa-trash fa-fw"></i></a>';
                $btn = $btn . '</div>';

                return $btn;
            });

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\App\Models\Admin\Master\GuruDataTable $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(tm_presensi $model)
    {
        return $model->select('tm_presensis.*')->with(['mapel']);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('kelas-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('<"dataTables_wrapper dt-bootstrap"B<"row"<"col-xl-7 d-block d-sm-flex d-xl-block justify-content-center"<"d-block d-lg-inline-flex"l>><"col-xl-5 d-flex d-xl-block justify-content-center"fr>>t<"row"<"col-sm-5"i><"col-sm-7"p>>>')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        // Button::make('export'),
                        // Button::make('print'),
                        // Button::make('reset'),
                        // Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            //Column::make('id'),
            Column::make('mapel')->data('mapel.nama'),
            Column::make('hari'),
            Column::make('tanggal'),
            Column::make('jam_mulai'),
            Column::make('jam_akhir'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'tm_presensi_' . date('YmdHis');
    }
}