<?php
$tanggal = tgl_indo($record['tanggal']);
echo "<p class='sidebar-title'> $record[judul]</p>
    <small class='date'><span class='glyphicon glyphicon-time'></span> $record[hari], $tanggal, $record[jam] WIB, $record[dibaca] View</small>
    <small class='date pull-right'><span class='glyphicon glyphicon-user'></span> $record[nama_lengkap], Kategori : <a href='" . base_url() . "berita/kategori/$record[kategori_seo]'>$record[nama_kategori]</a></small><hr>
<div class='col-md-12'>";
if ($record['gambar'] != '') {
  echo "<img class='pull-left img-thumbnail' style='margin-right:7px' src='" . base_url() . "asset/foto_berita/" . $record['gambar'] . "'>";
}
echo "<p>$record[isi_berita]</p>
</div><div style='clear:both'><br></div>

<p class='sidebar-title'> &nbsp; Berita Terkait</p><hr>";
echo "<table class='table table-hovered table-condensed'>";
foreach ($infoterkait->result_array() as $row) {
  $tanggaldetail = tgl_indo($row['tanggal']);
  if ($row['gambar'] == '') {
    $fotodetail = 'small_no-image.jpg';
  } else {
    $fotodetail = $row['gambar'];
  }
  echo "<tr>
                <td><img class='img-thumbnail pull-left' width='80px' style='margin-right:6px; height:60px' src='" . base_url() . "asset/foto_berita/" . $fotodetail . "'>
                    <a style='font-size:16px' href='" . base_url() . "berita/detail/$row[judul_seo]'><b>" . $row['judul'] . "</b></a><br>
                    <span class='text-danger'><span class='glyphicon glyphicon-time'></span> $row[hari], $tanggaldetail, $row[jam] WIB, Dibaca : $row[dibaca] Kali</span></td>
              </tr>";
}
echo "</table>";

echo "<br><div style='clear:both'></div>";
$total_komentar = $this->model_berita->komentar_berita($record['id_berita'])->num_rows();
if ($total_komentar >= '1') { ?>
  <div id='listcomment' class='alert alert-danger'><?php echo "Ada $total_komentar Komentar"; ?></div>
  <ul class="media-list comment-list">
    <li>
      <?php
      $no = 1;
      $komentar = $this->model_berita->komentar_berita($record['id_berita']);
      foreach ($komentar->result_array() as $rows) {
        $isian = nl2br($rows['isi_komentar']);
        $komentarku = sensor($isian);
        echo "<li class='media'>
                        <div class='media-left'>
                              <img style='width:60px; height:60px' class='media-object img-thumbnail img-circle' src='" . base_url() . "asset/foto_berita/user.png'/>
                        </div>
                        <div class='media-body'>
                          <strong class='user-nick'><a href='#'>$rows[nama_komentar]</a></strong>, 
                          <span class='time-stamp'>" . tgl_indo($rows['tgl']) . ", $rows[jam_komentar] WIB</span><br>
                          $komentarku
                        </div>
                      </li>";
      }
      ?>
    </li>
  </ul>
<?php } ?>
<?php echo "<center>" . $this->session->flashdata('message') . "</center>"; ?>