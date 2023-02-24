<div class="container">
    <h3 class="mt-3"><?= $judul; ?></h3>

    <div class="row">
        <div class="col-md-10">
            <form action="<?= base_url('peoples'); ?>" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search keyword.." name="keyword" autocomplete="off" autofocus>
                    <div class="input-group-append">
                        <input class="btn btn-primary" type="submit" name="submit">
                    </div>
                </div>
            </form>
        </div>
    </div>


    <div class="row">
        <div class="col-md-10">
            <h5>Result: <?= $total_rows; ?></h5>

            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php if (empty($peoples)) : ?>
                        <tr>
                            <td colspan="4">
                                <div class="alert alert-danger" role="alert">
                                    Data yang anda cari tida ditemukan!
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>

                    <?php
                    $i = 1;
                    foreach ($peoples as $people) : ?>
                        <th><?= ++$start; ?></th>
                        <td><?= $people['name'] ?></td>
                        <td><?= $people['email'] ?></td>
                        <td>
                            <a href="" class="badge badge-warning">details</a>
                            <a href="" class="badge badge-success">edit</a>
                            <a href="" class="badge badge-danger">delete</a>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
            <?= $this->pagination->create_links(); ?>
        </div>
    </div>
</div>