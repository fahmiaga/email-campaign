<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\TranslationLoader\LanguageLine;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'send_email',
                'text' => ['en' => 'Send Email', 'id' => 'Kirim Email']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'dashboard',
                'text' => ['en' => 'Dashboard', 'id' => 'Dasbor']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'groups',
                'text' => ['en' => 'Groups', 'id' => 'Kelompok']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'template',
                'text' => ['en' => 'Template', 'id' => 'Templat']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'add_new_group',
                'text' => ['en' => 'Add New Group', 'id' => 'Tambah Kelompok Baru']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'group_name',
                'text' => ['en' => 'Group Name', 'id' => 'Nama Kelompok']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'action',
                'text' => ['en' => 'Action', 'id' => 'Aksi']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'data_groups',
                'text' => ['en' => 'Data Group', 'id' => 'Data Kelompok']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'data_template',
                'text' => ['en' => 'Data Templates', 'id' => 'Data Templat']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'add_new_template',
                'text' => ['en' => 'Add New Template', 'id' => 'Tambah Templat Baru']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'template_name',
                'text' => ['en' => 'Template Name', 'id' => 'Nama Templat']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'add_new_member',
                'text' => ['en' => 'Add New Member', 'id' => 'Tambah Anggota Baru']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'yes',
                'text' => ['en' => 'Yes', 'id' => 'Ya']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'no',
                'text' => ['en' => 'No', 'id' => 'Tidak']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'are_you_sure',
                'text' => ['en' => 'Are You Sure', 'id' => 'Anda Yakin']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'update_record',
                'text' => ['en' => 'Update Record', 'id' => 'Perbaharui Baris']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'update',
                'text' => ['en' => 'Update', 'id' => 'Perbaharui']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'cancel',
                'text' => ['en' => 'Cancel', 'id' => 'Keluar']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'back',
                'text' => ['en' => 'Back', 'id' => 'Kembali']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'submit',
                'text' => ['en' => 'Submit', 'id' => 'Kirim']
            ],
        );
        LanguageLine::create(
            [
                'group' => 'translate',
                'key' => 'add_email',
                'text' => ['en' => 'Add Email', 'id' => 'Tambah Surel']
            ],
        );
    }
}
