<?php require_once('./view/layouts/headerSinhVien.php'); ?>
<style>
  .modal-td {
    padding: 10px;
  }

  .btnTimKiem {
    z-index: 1;
    position: relative;
    font-size: inherit;
    font-family: inherit;
    color: white;
    padding: 0.5em 1em;
    outline: none;
    border: none;
    background-color: hsl(236, 32%, 26%);
    overflow: hidden;
    transition: color 0.4s ease-in-out;
  }

  .btnTimKiem::before {
    content: '';
    z-index: -1;
    position: absolute;
    top: 100%;
    right: 100%;
    width: 1em;
    height: 1em;
    border-radius: 50%;
    background-color: #05c20f;
    transform-origin: center;
    transform: translate3d(50%, -50%, 0) scale3d(0, 0, 0);
    transition: transform 0.45s ease-in-out;
  }

  .btnTimKiem:hover {
    cursor: pointer;
    color: #161616;
  }

  .btnTimKiem:hover::before {
    transform: translate3d(50%, -50%, 0) scale3d(15, 15, 15);
  }

  .table td {
    font-size: 18px;
    padding: 5px 0px;
  }
  .table input {
    font-size: 18px;
   
  }
</style>

<div id="right" style="width: 100%;margin-left:10px; ">
  <div class="title">Thông tin sinh viên</div>
  <div class="entry flex">
    <?php if ($data['image']) { ?>
      <img src="<?= $data['image']; ?>" class="avatar" alt="Avatar" width="200" height="300">
    <?php } else { ?>
      <img src="https://img.wattpad.com/8f19b412f2223afe4288ed0904120a48b7a38ce1/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f776174747061642d6d656469612d736572766963652f53746f7279496d6167652f5650722d38464e2d744a515349673d3d2d3234323931353831302e313434336539633161633764383437652e6a7067?s=fit&w=720&h=720" class="avatar" alt="Avatar" width="200" height="200">
    <?php } ?>
    <div class="information">
      <table width="100%">
        <tbody class="table">
          <tr>
            <td width="30%">Mã sinh viên:</td>
            <td><?= $data['masinhvien'] ?></td>
          </tr>
          <tr>
            <td width="30%">Họ Tên:</td>
            <td><?= $data['hovaten'] ?></td>
          </tr>
          <tr>
            <td width="30%">Giới tính:</td>
            <td><?= $data['gioitinh'] ?></td>
          </tr>
          <tr>
            <td width="30%">Số CMND/CCCD:</td>
            <td><?= $data['cmnd'] ?></td>
          </tr>
          <tr>
            <td width="30%">Ngày sinh:</td>
            <td><?= $data['ngaysinh'] ?></td>
          </tr>
          <tr>
            <td width="30%">Lớp:</td>
            <td><?= $data['lop'] ?></td>
          </tr>
          <tr>
            <td width="30%">Giáo viên chủ nhiệm:</td>
            <td><?= $data['hvt'] ?></td>
          </tr>
          <tr>
            <td>Điện thoại:</td>
            <td><?= $data['dienthoai'] ?></td>
          </tr>
          <tr>
            <td>Email SV:</td>
            <td><?= $data['email'] ?></td>
          </tr>
          <tr>
            <td>Chỗ ở hiện nay:</td>
            <td><?= $data['diachi'] ?></td>
          </tr>
        </tbody>
      </table>
      <button style="margin-top: 10px; color:aliceblue;" type="button" data-toggle="modal" data-target="#myModal" class="btnTimKiem btn">Cập nhật</button>
    </div>
  </div>
</div>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Cập nhật thông tin sinh viên</h4>
      </div>
      <form action="" method="POST" role="form" enctype="multipart/form-data">
        <div class="modal-body">
          <!-- <p>Some text in the modal.</p> -->
          <table width="100%">
            <tbody class="table">
              <tr>
                <td class="modal-td" width="30%">Ảnh:</td>
                <td class="modal-td"> <input class="form-control" value="<?= $data['image'] ?>" name="image" type="text" id="" placeholder="Ảnh"></td>
              </tr>
              <tr>
                <td class="modal-td" width="30%">Giới tính:</td>
                <td class="modal-td">
                  <select class="form-control" id="gioitinh" name="gioitinh">
                    <option value="Nam" <?php if ($data['gioitinh'] == 'Nam') {
                                          echo ' selected';
                                        } ?>>Nam</option>
                    <option value="Nữ" <?php if ($data['gioitinh'] == 'Nữ') {
                                          echo ' selected';
                                        } ?>>Nữ</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td class="modal-td" width="30%">Số CMND/CCCD:</td>
                <td class="modal-td"> <input class="form-control" value="<?= $data['cmnd'] ?>" name="cmnd" type="text" id="" placeholder="Số CMND/CCCD"></td>
              </tr>
              <tr>
                <td class="modal-td">Điện thoại:</td>
                <td class="modal-td"> <input class="form-control" value="<?= $data['dienthoai'] ?>" name="dienthoai" type="text" id="" placeholder="Điện thoại"></td>
              </tr>
              <tr>
                <td class="modal-td">Email SV:</td>
                <td class="modal-td"> <input class="form-control" value="<?= $data['email'] ?>" name="email" type="email" id="" placeholder="Email SV"></td>
              </tr>
              <tr>
                <td class="modal-td">Chỗ ở hiện nay:</td>
                <td class="modal-td"> <input class="form-control" value="<?= $data['diachi'] ?>" name="diachi" id="" placeholder="Chỗ ở hiện nay"></td>
              </tr>
            </tbody>
          </table>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-error" data-dismiss="modal">Close</button>
          <button class="btn btn-primary" name="edit_sv">OK</button>
        </div>
      </form>
    </div>

  </div>
</div>