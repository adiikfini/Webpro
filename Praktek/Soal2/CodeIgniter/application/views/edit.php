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
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div class="container bg-dark border rounded">

                    <h2 class="text-center pt-3"><span class="text-white">Update Buku</span></h2>
                    <?php foreach ($buku as $book):?>
                    <form method="post" action="<?php echo base_url().'buku/update'; ?>">
                        <div class="form_group">
                            <label for="judul"><span class="text-white"><b>Judul</b> </span></label>
                            <input type="hidden" name="id" class="form-control" value="<?php echo $book->id ?>">
                            <input type="text" name="judul" class="form-control my-1"
                                value="<?php echo $book->judul ?>">
                        </div>
                        <div class="form_group">
                            <label for="pengarang"><span class="text-white"><b>Pengarang</b> </span></label>
                            <input type="text" name="pengarang" class="form-control my-1"
                                value="<?php echo $book->pengarang ?>">
                        </div>
                        <div class="form_group">
                            <label for="penerbit"><span class="text-white"><b>Penerbit</b> </span></label>
                            <input type="text" name="penerbit" class="form-control my-1"
                                value="<?php echo $book->penerbit ?>">
                        </div>
                        <div class="form_group">
                            <label for="tahun"><span class="text-white"><b>Tahun</b> </span></label>
                            <input type="text" name="tahun" class="form-control my-1"
                                value="<?php echo $book->tahun ?>">
                        </div>
                        <div class="form_group" value="<?php echo $book->status ?>">
                            <label for="status">
                                <span class="text-white"><b>Status</b></span>
                            </label> <br>
                            <input type="radio" name="status" value="tersedia"><span class="text-white">Tersedia
                            </span> <br>
                            <input type="radio" name="status" value="pre order" class="text-white"> <span
                                class="text-white">Pre order</span><br>
                            <input type="radio" name="status" valiue="tidak tersedia" class="text-white"><span
                                class="text-white">Tidak tersedia</span><br>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-danger my-2">Riset</button>
                            <button type="submit" class="btn btn-primary my-2">Simpan </button>
                        </div>
                    </form>
                    <?php endforeach ?>
                </div>
            </div>
            <div class="col-4"></div>
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