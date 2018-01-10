<?php 

?>
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
      <div class="box-header">
        <h3 class="box-title"></h3>
        <div class="box-tools">
          <ul class="pagination pagination-sm no-margin pull-right">
            <li><a href="#">«</a></li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">»</a></li>
          </ul>
        </div>
      </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <table class="table">
            <tbody>
              <tr>
                <th>No. </th>
                <?php 
                  if (isset($column)) {
                    foreach ($column as $column_key => $column_value) {
                ?>
                  <th><?php echo $this->lang->line($column_value) ?></th>
                <?php
                    }
                  }
                ?>
                <th>#</th>
              </tr>
              <tr>
                <?php
                  if (isset($data['data'])) {
                    foreach ($data['data'] as $data_key => $data_value) {
                ?>
                  <td><?php echo $data_key + 1 ?></td>
                      <?php
                        if (isset($column)) {
                          foreach ($column as $column_key => $column_value) {
                      ?>
                          <td><?php echo $data_value[$column_value] ?></td>
                      <?php
                          }
                        }
                      ?>
                <?php
                    }
                  } 
                ?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>      
</section>