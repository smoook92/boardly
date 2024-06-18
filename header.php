<!doctype html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <div class="r25px"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-12">
                Местоположение <a href="/geo/"><?php echo $gorod; ?></a>
                <div class="r10px"></div>
            </div>
            <div class="col-md-6 col-12">

            </div>
            <div class="col-md-3 col-12">
                <button type="button" class="btn btn-success podat_objavlenie">Подать объявление</button>
                <div class="r10px"></div>
            </div>
            <div class="col-12">
                <h1>Boardly</h1>
                <div class="r20px"></div>
            </div>
            <div style="height: 18px;"></div>

            <div class="col-12">
                <div class="alert alert-primary poisk" role="alert">
                    <div class="row">
                      <div class="col-md-3 col-12">
                        <select class="form-select" aria-label="Default select example">
                          <option selected>Категории</option>
                          <option value="1">One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                        </select>
                        <div class="r10px"></div>
                      </div>
                      <div class="col-md-8 col-12">
                        <input type="text" class="form-control" placeholder="Поиск по объявлениям">
                        <div class="r10px"></div>
                      </div>
                      <div class="col-md-1 col-12">
                        <button class="btn btn-outline-light">Найти</button>
                        <div class="r10px"></div>
                      </div>
                    </div>
                  </div>                  
            </div>
        </div>
    </div>

    <div class="r20px"></div>