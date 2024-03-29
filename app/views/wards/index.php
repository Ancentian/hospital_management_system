<div class="app-main__outer">
    <div class="app-main__inner">

        <div class="row">
            <div class="col-lg-12">
                <?php if ($this->session->flashdata('success-msg')) { ?>
                    <div class="alert alert-success"><?php echo $this->session->flashdata('success-msg'); ?></div>
                <?php } ?>
                <?php if ($this->session->flashdata('error-msg')) { ?>
                    <div class="alert alert-danger"><?php echo $this->session->flashdata('error-msg'); ?></div>
                <?php } ?>
                <div class="main-card mb-3 card">
                    <div class="card-header"><i class="header-icon lnr-license icon-gradient bg-plum-plate"> </i>WARDS
                        &nbsp;&nbsp;
                        <a href="<?php echo base_url(); ?>wards/addward" class="btn btn-warning" role="button">Add
                            New</a>

                    </div>
                    <div class="card-body">
                        <table class="mb-0 table table-striped">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>No of Beds</th>
                                <th>Occupancy</th>
                                <th>Cost</th>
                                <th>Type</th>
                                <th>*</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php $i = 1;
                            foreach ($wards as $one) {
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $i; ?></th>
                                    <td><?php echo $one['name']; ?></td>
                                    <td><?php echo $one['beds']; ?></td>
                                    <td><?php echo $one['beds_occupancy'] . " / " . $one['beds']; ?></td>
                                    <td><?php echo $one['cost']; ?></td>
                                    <td><?php echo $one['type']; ?></td>
                                    <td><a href="<?php echo base_url(); ?>wards/editward/<?php echo $one['id']; ?>"><i
                                                    class="fa fa-fw icon-custom" aria-hidden="true"></i></a>
                                        &nbsp;
                                        <a href="<?php echo base_url(); ?>wards/delete/<?php echo $one['id']; ?>"><i
                                                    class="fa fa-fw icon-danger"></i></a></td>

                                </tr>
                                <?php $i++;
                            } ?>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>