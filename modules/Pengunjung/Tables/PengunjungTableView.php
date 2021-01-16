<?php

namespace Modules\Pengunjung\Tables;

use Laravolt\Suitable\Columns\Date;
use Laravolt\Suitable\Columns\Numbering;
use Laravolt\Suitable\Columns\RestfulButton;
use Laravolt\Suitable\Columns\Text;
use Laravolt\Suitable\TableView;
use Modules\Pengunjung\Models\Pengunjung;

class PengunjungTableView extends TableView
{
    protected $title = 'Data Pengunjung';

    public function source()
    {
        return Pengunjung::autoSort()->latest()->autoSearch(request('search'))->paginate();
    }

    protected function columns()
    {
        return [
            Numbering::make('No')->sortable(),
            Text::make('no_identitas')->sortable()->searchable(),
            Text::make('nama_lengkap')->sortable()->searchable(),
            Text::make('no_hp')->sortable(),
            Date::make('created_at'),
            RestfulButton::make('modules::pengunjung'),
        ];
    }
}