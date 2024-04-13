<?php

namespace App\Imports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\ToModel;

class ParticipantImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Participant([
            'nip_nik'=> $row['no_identitas {Diisi dengan NIP/NRP/NPP/NIK}'],
            'nama_peserta'=> $row['nama {diisi dengan nama peserta}'],
            'email'=> $row['email {Diisi dengan alamat email }']
        ]);
    }
}
