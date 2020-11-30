<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Desa_model extends CI_Model
{
    var $tabel_user     = 'user';
    var $tabel_desa     = 'id_desa';
    var $tb_rovinsi     = 'prov';
    var $tb_kota        = 'kabkot';
    var $tb_kec         = 'kac';
    var $tb_desa        = 'desa';
    public function getPropinsi()
    {
        $query = $this->db->get_where(
            'id_desa',
            array(
                'lokasi_kabupatenkota'  => '0',
                'lokasi_kecamatan'      => '0',
                'lokasi_kelurahan'      => '0'
            )
        );
        // $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
        //           FROM `user_sub_menu` JOIN `user_menu`
        //           ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
        //         ";
        return $this->db->query($query)->result_array();
    }
    public function ambil_provinsi()
    {
        $this->db->where('lokasi_kabupatenkota', '0');
        $this->db->where('lokasi_kecamatan', '0');
        $this->db->where('lokasi_kelurahan', '0');
        $this->db->order_by('lokasi_nama', 'asc');
        $sql_prov = $this->db->get($this->tabel_desa);
        if ($sql_prov->num_rows() > 0) {
            foreach ($sql_prov->result_array() as $row) {
                $result['-'] = '- Pilih Provinsi -';
                $result[$row['lokasi_propinsi']] = ucwords(strtolower($row['lokasi_nama']));
            }
            return $result;
        }
    }
    public function ambil_kabupaten($kode_prop)
    {
        $this->db->where('lokasi_propinsi', $kode_prop);
        $this->db->where('lokasi_kecamatan', '0');
        $this->db->where('lokasi_kelurahan', '0');
        $this->db->order_by('lokasi_nama', 'asc');
        $sql_kabupaten = $this->db->get($this->tabel_desa);
        if ($sql_kabupaten->num_rows() > 0) {

            foreach ($sql_kabupaten->result_array() as $row) {
                $result[$row['lokasi_kabupatenkota']] = ucwords(strtolower($row['lokasi_nama']));
            }
        } else {
            $result['-'] = '- Belum Ada Kabupaten -';
        }
        return $result;
    }
    public function ambil_kecamatan($kode_kab)
    {
        $this->db->where('lokasi_kabupatenkota', $kode_kab);
        $this->db->where('lokasi_kelurahan', '0');
        $this->db->order_by('lokasi_nama', 'asc');
        $sql_kecamatan = $this->db->get($this->tabel_desa);
        if ($sql_kecamatan->num_rows() > 0) {

            foreach ($sql_kecamatan->result_array() as $row) {
                $result[$row['lokasi_kecamatan']] = ucwords(strtolower($row['lokasi_nama']));
            }
        } else {
            $result['-'] = '- Belum Ada Kecamatan -';
        }
        return $result;
    }
    public function ambil_kelurahan($kode_kec)
    {
        $this->db->where('lokasi_kecamatan', $kode_kec);
        $this->db->order_by('lokasi_nama', 'asc');
        $sql_kelurahan = $this->db->get($this->tabel_desa);
        if ($sql_kelurahan->num_rows() > 0) {

            foreach ($sql_kelurahan->result_array() as $row) {
                $result[$row['lokasi_kelurahan']] = ucwords(strtolower($row['lokasi_nama']));
            }
        } else {
            $result['-'] = '- Belum Ada Kelurahan -';
        }
        return $result;
    }
    public function user()
    {
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    }

    public function prov()
    {
        $data['user']   = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $prov           = $data['user']['prov'];
        $data['prov']   = $this->db->get_where(
            'id_desa',
            array(
                'lokasi_propinsi'       => $prov,
                'lokasi_kabupatenkota'  => '0',
                'lokasi_kecamatan'      => '0',
                'lokasi_kelurahan'      => '0'
            )
        )->row_array();
    }
}
