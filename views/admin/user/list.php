      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
         لیست کاربر 
          <small>توضیحات</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
          <li class="active">صفحه</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">جدول داده ها مثال ۱</h3>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <div id="example2_wrapper" class="dataTables_wrapper form-inline dt-bootstrap text-center">
                  <div class="row">
                    <div class="col-sm-6"></div>
                    <div class="col-sm-6"></div>
                </div>
                <div class="row"><div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable text-center" role="grid" aria-describedby="example2_info">
                  <thead>
                    <tr role="row">
                      <th class="sorting_asc">#</th>
                      <th class="sorting"  >نام و نام خانوادگی</th>
                      <th class="sorting"  >ایمیل</th>
                      <th class="sorting"  >نقش کاربری</th>
                      <th class="sorting"  >وضیعیت</th>                     
                      <th class="sorting"  >عملیات</th>                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr role="row" class="odd">
                      <?php foreach($users as $key => $user) : $user=(object) $user ; ?>
                      <td class="sorting_1"><?=($key + 1)?></td>
                      <!-- <td><?php //echo $user['full_name'] ;?> </td> -->
                      <td><?= $user->full_name ; ?></td>
                      <td><?= $user->email ; ?></td>
                      <td><?= getRole($user->role) ; ?></td>
                      <td><?= userStatus($user->confirmed) ; ?></td>
                      <td>
                      <a href="<?=(getUriByAliensName('confirmeUser') . '?userId=' . $user->uid) ;?>"class="btn btn-success" ><span class="fa fa-check"></span></a>
                        <a href="<?=(getUriByAliensName('editUser') . '?userId=' . $user->uid) ;?>" class="btn btn-info" ><span class="fa fa-edit"></span></a>
                        <form method="post" action="<?=getUriByAliensName('removeUser')?>" class="inline">
                         <?=CSRFInput() ;?>
                          <button class="btn btn-danger" value="<?=$user->uid?>" name="user_id" type="submit" >
                             <span class="fa fa-times "></span>
                          </button>
                        </form>
                        
                      </td>
                    </tr>
                    <?php endforeach ;?>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">                
              <div class="col-sm-12">
                <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                  <ul class="pagination">
                    <li class="paginate_button previous disabled" id="example2_previous">
                      <a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li>
                      <li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li>
                      <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li>
                      <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li>
                      <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li>
                      <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li>
                      <li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li>
                      <li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li>
                    </ul>
                  </div>
                </div>
              </div>
          </div>
          </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
      <!-- /.content -->
