<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.11.1/bootstrap-table.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="box">
  <div class="box-header">
    <h3 class="box-title"><label>All Medications</label></h3>
  </div>
  <div class="box-body">

    <table data-toggle="table" data-click-to-select="true" data-pagination="true" data-page-list="[5, 10, 15, 20]" data-height="340" data-search="true" class="table-hover table-responsive" id="tableRoomList">
      <thead>
        <tr>
          <th data-field="state" data-checkbox="true" id="check"></th>
          <th data-field="name">Name</th>
          <th data-field="stargazers_count">Stars</th>
          <th data-field="forks_count">Forks</th>
          <th data-field="description">Description</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>6</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>6</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>
        <tr>
          <td data-field="state" data-checkbox="false" id="check"></td>
          <td>Jorge</td>
          <td>5</td>
          <td>AAA</td>
          <td>Description</td>
        </tr>

      </tbody>
    </table>
    <div class="header pull-left">
      <input type="button" id="btn-refill" class="btn btn-primary" value="Refill Request" onclick="Ejecutar();" />
    </div>

  </div>
</div>

<script>
$(function() {
  var $table = $('#tableRoomList');
  $table.on('check.bs.table', toggleBtn);
  $table.on('uncheck.bs.table', toggleBtn);
  $table.on('check-all.bs.table', toggleBtn);
  $table.on('uncheck-all.bs.table', toggleBtn);
  toggleBtn();

  //

  function toggleBtn() {
    var rows = $table.bootstrapTable('getSelections');
    $('#btn-refill').prop('disabled', rows.length === 0);
  }

});
</script>
</body>
</html>