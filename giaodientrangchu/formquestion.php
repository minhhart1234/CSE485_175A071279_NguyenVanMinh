
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
<style>
  
label.error{
    color: red;
    font-size: 13px;
}
.error{
    font-size : 15px;
    width : 100%
}
</style>
<div class="title typescale-4 text-center">Đặt câu hỏi mới</div>
<div class="qa-form">
  <form
    method="POST"
    id="question"
    action=""
  >
    <div class="form-group">
      <label>Họ tên</label>
      <input
        type="text"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        id="PostUser"
        name="PostUser" required
      />
    </div>
    <div class="form-group">
      <label >Địa chỉ</label>
      <input
        type="text"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        id="PostUserAddress"
        name="PostUserAddress" required
      />
    </div>
    <div class="form-group">
      <label >Email</label>
      <input
        type="text"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        id="PostUserMail"
        name="PostUserMail" required
      />
    </div>
    <div class="form-group">
      <label >Số điện thoại</label>
      <input
        type="text"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        id="PostUserTel"
        name="PostUserTel" required
      />
    </div>
    <div class="form-group">
      <label required>Ngành tuyển sinh</label>
      <select

      name="select"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        id="mdlCate"
       
        ><option label="Công nghệ thông tin" value="object:81"
          >Công nghệ thông tin</option>
        <option label="Kỹ thuật phần mềm " value="object:82">Kỹ thuật phần mềm</option>
        <option label="Hệ thông thông tin" value="object:83">Hệ thống thông tin</option>
      </select
      >
    </div>
    <div class="form-group">
      <label >Tiêu đề hỏi</label>
      <input
        type="text"
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        id="PostTitle" 
        name="PostTitle" required
      />
    </div>
    <div class="form-group">
      <label>Câu hỏi</label>
      <textarea
        class="form-control ng-pristine ng-untouched ng-valid ng-empty"
        cols="10"
        rows="4"
        id="PostContent"
        name="PostContent"
        required
      ></textarea>
    </div>
    <table alig="center">
      <tbody>
       
        </tr>
        <tr></tr>
      </tbody>
    </table>
    <div style="margin-top: 3px; text-align: center;">
      <button
        type="submit"
        class="btn btn-outline-dark2"
        style="width: 150px; margin-right: 12px;"
        id="send"
      >
        Gửi câu hỏi
      </button>
    </div>
  </form>
</div>
</div>
<script type="text/javascript">
    
    