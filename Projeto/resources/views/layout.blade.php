<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form class="row gx-3 gy-2 align-items-center">
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputName">Name</label>
    <input type="text" class="form-control" id="specificSizeInputName" placeholder="">
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputGroupUsername">Cidade</label>
    <div class="input-group">
      <div class="input-group-text"></div>
      <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="EX:Curitiba">
    </div>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeInputGroupUsername">Número</label>
    <div class="input-group">
      <div class="input-group-text"></div>
      <input type="text" class="form-control" id="specificSizeInputGroupUsername" placeholder="(ddd)9 1234-5678">
    </div>
  </div>
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeSelect">Tipo</label>
    <select class="form-select" id="specificSizeSelect">
      <option selected>Escolha o tipo de compra</option>
      <option value="1">Virtual</option>
      <option value="2">Física</option>
    </select>
  </div>
  <div class="col-auto">
  <div class="col-sm-3">
    <label class="visually-hidden" for="specificSizeSelect">Tipo</label>
    <select class="form-select" id="specificSizeSelect">
      <option selected>Escolha o produto</option>
      <option value="1"></option>
      <option value="2"></option>
    </select>
  </div>

  <div class="col-auto">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</body>
</html>