<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tokoku</title>
    <!-- boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- Font awasome kit unique -->
    <script src="https://kit.fontawesome.com/1834b493b5.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <!-- As a heading -->
        <nav class="navbar bg-light">
            <div class="container">
                <span class="navbar-brand mb-0 h1 mx-auto">Tokoku</span>
            </div>
        </nav>
    </header>
    <!-- table crud -->
    <section class="content mt-5">
        <div class="container">
            <button class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                    class="fa fa-plus mx-1"></i> Tambah buku</button>
            <table class="table table-striped">
                <tr>
                    <th>Id</th>
                    <th>Judul</th>
                    <th>Pengarang</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                    <th>Status</th>
                    <th colspan="2">action</th>
                </tr>
                <?php  
            $no = 1;
            foreach($buku as $book) : 
            ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $book->judul ?></td>
                    <td><?php echo $book->pengarang ?></td>
                    <td><?php echo $book->penerbit ?></td>
                    <td><?php echo $book->tahun ?></td>
                    <td><?php echo $book->status ?></td>
                    <td onclick="javascript: return confirm('Apakah anda yakin ingin menghapus?')">
                        <?php echo anchor('buku/remove/'.$book->id,'<div class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></div>')?>
                    </td>
                    <td><?php echo anchor('buku/edit/'.$book->id,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></div>') ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </table>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel">Masukan Data</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="post" action="<?php echo base_url().'buku/add'?>">
                            <div class="form-group">
                                <label for="judul"><b>Judul Buku</b></label>
                                <input type="text" name="judul" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="pengarang"><b>Pengarang</b></label>
                                <input type="text" name="pengarang" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="penerbit"><b>Penerbit</b></label>
                                <input type="text" name="penerbit" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tahun"><b>Tahun</b></label>
                                <input type="text" name="tahun" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="status"><b>Status</b></label> <br>
                                <input type="radio" name="status" value="tersedia">Tersedia <br>
                                <input type="radio" name="status" value="pre order">Pre order <br>
                                <input type="radio" name="status" valiue="tidak tersedia">Tidak tersedia <br>

                            </div>
                            <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>