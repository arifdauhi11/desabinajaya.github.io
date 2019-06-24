<div class="page-title grey">
            <div class="container">
                <div class="title-area text-center">
                    <h2>Data Penduduk Desa Bina Jaya</h2>
                    <div class="bread">
                        <ol class="breadcrumb">
                            <li><a href="<?php site_url(); ?>beranda">Beranda</a></li>
                            <li class="active">Data Penduduk</li>
                        </ol>
                    </div><!-- end bread -->
                </div><!-- /.pull-right -->
            </div>
        </div><!-- end page-title -->

        <section class="section grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                            <div class="tabbed-widget">
                                <ul class="nav nav-tabs row nopadding">
                                    <li class="active col-md-3 col-sm-6 col-xs-12 nopadding"><a data-toggle="tab" href="#home">Data Tabel</a></li>
                                    <li class="col-md-3 col-sm-6 col-xs-12 nopadding"><a data-toggle="tab" href="#pie">Pie Chart</a></li>
                                    <li class="col-md-3 col-sm-6 col-xs-12 nopadding"><a data-toggle="tab" href="#bar">Bar Chart</a></li>
                                    <li class="col-md-3 col-sm-6 col-xs-12 nopadding"><a data-toggle="tab" href="#pai">Pie Chart 2</a></li>
                                </ul>

                                <div class="tab-content row">
                                    <div id="home" class="tab-pane fade in active">
                                        <div class="row">
                                            <div>
                                                <table class="table table-bordered">
                                                <thead>
                                                <tr>
                                                <th> No </th>
                                                <th> Nama </th>
                                                <th> Agama </th>
                                                <th> Pekerjaan </th>
                                                <th> Jenis Kelamin </th>
                                                <th> Umur </th>
                                                </tr>
                                                </thead>
                                                <?php 
                                                $no = 1;
                                                foreach($penduduk as $p){ 
                                                ?>
                                                <tbody>
                                                <tr>
                                                <td> <?php echo $no++ ?> </td>
                                                <td><?php echo $p->nama ?></td>
                                                <td><?php echo $p->agama ?></td>
                                                <td><?php echo $p->pekerjaan ?></td>
                                                <td><?php echo $p->jenkel ?></td>
                                                <td><?php echo $p->umur ?> Tahun</td>
                                                </tr>
                                                <?php } ?>
                                                </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="pie" class="tab-pane fade">
                                        <?php $this->load->view('web/v_pie') ?>
                                    </div>
                                    <div id="bar" class="tab-pane fade">
                                        <?php $this->load->view('web/v_bar') ?>
                                    </div>
                                    <div id="pai" class="tab-pane fade">
                                                <?php $this->load->view('admin/v_piee') ?>
                                    </div>
                                </div>
                            </div><!-- end tabbed-widget -->
                    </div>
                </div>
            </div><!-- end container -->
        </section><!-- end section -->