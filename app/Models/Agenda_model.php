<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Agenda_model extends Model
{

	protected $table 		= "agenda";
	protected $primaryKey 	= 'id_agenda';

     // listing
    public function semua()
    {
        $query = DB::table('agenda')
            ->join('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda','LEFT')
            ->join('users', 'users.id_user', '=', 'agenda.id_user','LEFT')
            ->select('agenda.*', 'kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda','users.nama')
            ->orderBy('id_agenda','DESC')
            ->paginate(25);
        return $query;
    }

        // kategori
    public function kategori_depan($id_kategori)
    {
        $query = DB::table('agenda')
             ->join('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda','LEFT')
            ->join('users', 'users.id_user', '=', 'agenda.id_user','LEFT')
            ->select('agenda.*', 'kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda','users.nama')
            ->where(array(  'agenda.id_kategori_agenda'         => $id_kategori,
                            'agenda.status_agenda'      => 'Publish'))
            ->orderBy('id_agenda','DESC')
            ->paginate(12);
        return $query;
    }

    public function cariFrontend($keywords)
    {
    $query = DB::table('agenda')
        ->leftJoin('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda')
        ->leftJoin('users', 'users.id_user', '=', 'agenda.id_user')
        ->select(
            'agenda.*',
            'kategori_agenda.slug_kategori_agenda',
            'kategori_agenda.nama_kategori_agenda',
            'users.nama'
        )
        ->where('agenda.status_agenda', 'Publish')
        ->where(function($q) use ($keywords) {
            $q->where('agenda.judul_agenda', 'LIKE', "%{$keywords}%")
            ->orWhere('agenda.isi', 'LIKE', "%{$keywords}%");
        })
        ->orderBy('agenda.id_agenda', 'DESC')
        ->paginate(4);

        return $query;
    }

    // author
    public function author($id_user)
    {
        $query = DB::table('agenda')
            ->join('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda','LEFT')
            ->join('users', 'users.id_user', '=', 'agenda.id_user','LEFT')
            ->select('agenda.*', 'kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda','users.nama')
            ->where('agenda.id_user',$id_user)
            ->orderBy('id_agenda','DESC')
            ->paginate(25);
        return $query;
    }

    // listing
    public function cari($keywords)
    {
        $query = DB::table('agenda')
            ->join('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda','LEFT')
            ->join('users', 'users.id_user', '=', 'agenda.id_user','LEFT')
            ->select('agenda.*', 'kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda','users.nama')
            ->where('agenda.judul_agenda', 'LIKE', "%{$keywords}%")
            ->orWhere('agenda.isi', 'LIKE', "%{$keywords}%")
            ->orderBy('id_agenda','DESC')
           ->paginate(25);
        return $query;
    }

    // kategori_agenda
    public function all_kategori_agenda($id_kategori_agenda)
    {
        $query = DB::table('agenda')
            ->join('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda','LEFT')
            ->join('users', 'users.id_user', '=', 'agenda.id_user','LEFT')
            ->select('agenda.*', 'kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda','users.nama')
            ->where(array(  'agenda.id_kategori_agenda'    => $id_kategori_agenda))
            ->orderBy('id_agenda','DESC')
            ->paginate(25);
        return $query;
    }

    // kategori_agenda
    public function kategori_agenda()
    {
        $query = DB::table('kategori_agenda')
            ->select('kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda')
            ->orderBy('id_kategori_agenda','DESC')
            ->paginate(25);
        return $query;
    }

    // kategori_agenda
    public function list_kategori()
    {
        $query = DB::table('kategori_agenda')
            ->select('kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda')
            ->orderBy('id_kategori_agenda','DESC')
            ->paginate(25);
        return $query;
    }

    // kategori_agenda
    public function jenis_agenda($jenis_agenda)
    {
        $query = DB::table('agenda')
             ->join('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda','LEFT')
            ->join('users', 'users.id_user', '=', 'agenda.id_user','LEFT')
            ->select('agenda.*', 'kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda','users.nama')
            ->where(array(  'agenda.jenis_agenda'         => $jenis_agenda))
            ->orderBy('id_agenda','DESC')
            ->paginate(25);
        return $query;
    }

    // listing
    public function listing()
    {
    	$query = DB::table('agenda')
             ->join('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda','LEFT')
            ->join('users', 'users.id_user', '=', 'agenda.id_user','LEFT')
            ->select('agenda.*', 'kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda','users.nama')
            ->where('agenda.status_agenda','Publish')
            ->orderBy('id_agenda','DESC')
            ->paginate(12);
        return $query;
    }

    // listing
    public function home()
    {
        $query = DB::table('agenda')
             ->join('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda','LEFT')
            ->join('users', 'users.id_user', '=', 'agenda.id_user','LEFT')
            ->select('agenda.*', 'kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda','users.nama')
            ->orderBy('id_agenda','DESC')
            ->limit(3)
            ->get();
        return $query;
    }

    // detail
    public function read($slug_agenda)
    {
        $query = DB::table('agenda')
             ->join('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda','LEFT')
            ->join('users', 'users.id_user', '=', 'agenda.id_user','LEFT')
            ->select('agenda.*', 'kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda','users.nama')
            ->where('agenda.slug_agenda',$slug_agenda)
            ->orderBy('id_agenda','DESC')
            ->first();
        return $query;
    }

     // detail
    public function detail($id_agenda)
    {
        $query = DB::table('agenda')
             ->join('kategori_agenda', 'kategori_agenda.id_kategori_agenda', '=', 'agenda.id_kategori_agenda','LEFT')
            ->join('users', 'users.id_user', '=', 'agenda.id_user','LEFT')
            ->select('agenda.*', 'kategori_agenda.slug_kategori_agenda', 'kategori_agenda.nama_kategori_agenda','users.nama')
            ->where('agenda.id_agenda',$id_agenda)
            ->orderBy('id_agenda','DESC')
            ->first();
        return $query;
    }
}
