<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
// use Livewire\WithPagination;

class CrudPaket extends Component
{
    // use WithPagination;
    public $isCreating, $isUpdate;
    public $readyToLoad = false;
    public $name, $promo, $harga, $uname, $upromo, $uharga, $uid;


    public function closeCreate(){
        $this->isCreating = false;
        $this->name='';
        $this->harga='';
        $this->promo= '';
    }

    public function store(){
        $this->validate([
            'name' => 'required',
            'harga' => 'required|numeric',
            'promo' => 'required|numeric'
        ]);

        DB::table('hargapakets')->insert([
            'name' => $this->name,
            'harga'=> $this->harga,
            'promo' => $this->promo
        ]);
        $this->closeCreate();
    }

    public function edit($id){
        $data = DB::table('hargapakets')->where('id', $id)->first();
        $this->uname = $data->name;
        $this->uharga = $data->harga;
        $this->upromo = $data->promo;
        $this->uid = $data->id;
        $this->isUpdate = true;
    }

    public function storeUpdate($id){
        $this->validate([
            'uname' => 'required',
            'upromo' => 'required|numeric',
            'uharga' => 'required|numeric'
        ]);

        DB::table('hargapakets')->where('id', $id)->update([
            'name' => $this->uname,
            'promo' => $this->upromo,
            'harga' => $this->uharga
        ]);

        $this->isUpdate = false;
    }

    public function deleting($id){
        DB::table('hargapakets')->where('id', $id)->delete();
    }

    public function loadPosts(){
        $this->readyToLoad = true;
    }

    public function closeUpdate(){
        $this->isUpdate = false;
    }
    public function render()
    {
        return view('livewire.crud-paket', [
            'pakets' => $this->readyToLoad ?  DB::table('hargapakets')->get() : []
        ]);
    }
}
