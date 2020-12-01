<?
$prov           = $user['prov'];
$kota           = $user['kota'];
$kec            = $user['kec'];
$kel            = $user['kel'];
$data['prov']   = $this->db->get_where(
    'id_desa',
    array(
        'lokasi_propinsi'       => $prov,
        'lokasi_kabupatenkota'  => '0',
        'lokasi_kecamatan'      => '0',
        'lokasi_kelurahan'      => '0'
    )
)->row_array();
$data['kota']   = $this->db->get_where(
    'id_desa',
    array(
        'lokasi_propinsi'       => $prov,
        'lokasi_kabupatenkota'  => $kota,
        'lokasi_kecamatan'      => '0',
        'lokasi_kelurahan'      => '0'
    )
)->row_array();
$data['kec']   = $this->db->get_where(
    'id_desa',
    array(
        'lokasi_propinsi'       => $prov,
        'lokasi_kabupatenkota'  => $kota,
        'lokasi_kecamatan'      => $kec,
        'lokasi_kelurahan'      => '0'
    )
)->row_array();
$data['kel']   = $this->db->get_where(
    'id_desa',
    array(
        'lokasi_propinsi'       => $prov,
        'lokasi_kabupatenkota'  => $kota,
        'lokasi_kecamatan'      => $kec,
        'lokasi_kelurahan'      => $kel
    )
)->row_array();


$this->load->view('wpu/templates/header', $data);
$this->load->view('wpu/templates/sidebar', $data);
$this->load->view('wpu/templates/topbar', $data);
$this->load->view('wpu/user/index', $data);
$this->load->view('wpu/templates/footer');
}
?>