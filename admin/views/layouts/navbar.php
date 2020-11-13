<ul class="nav flex-column">
    <?php  if(isset($_SESSION['logged']) && $_SESSION['logged'] ==1){?>
        <li class="nav-item" style="margin: 10px 10px 10px 10px">
            <a class="nav-link active" href="/admin/" ><i class="icon-home"></i></i>Home</a>
  <li class="nav-item" style="margin: 10px 10px 10px 10px">
    <a class="nav-link active" href="/admin/?controller=category" ><i class="icon-book"></i></i>Danh mục</a>
  </li>
  <li class="nav-item" style="margin: 10px 10px 10px 10px">
    <a class="nav-link" href="/admin/?controller=category&action=add"><i class="icon-expand-alt"></i>Thêm danh mục</a>
  </li>
    <li class="nav-item" style="margin: 10px 10px 10px 10px">
        <a class="nav-link active" href="/admin/?controller=news"><i class="icon-calendar"></i>Tin tức</a>
    </li>
    <li class="nav-item" style="margin: 10px 10px 10px 10px">
        <a class="nav-link" href="/admin/?controller=news&action=add"><i class="icon-expand-alt"></i>Thêm tin tức</a>
    </li>
        <li class="nav-item" style="margin: 10px 10px 10px 10px">
            <a class="nav-link active" href="/admin/?controller=rol"><i class="icon-collapse"></i>Quyền</a>
        </li>
        <li class="nav-item" style="margin: 10px 10px 10px 10px">
            <a class="nav-link" href="/admin/?controller=rol&action=add"><i class="icon-expand-alt"></i>Thêm quyền</a>
        </li>
        <li class="nav-item" style="margin: 10px 10px 10px 10px">
            <a class="nav-link active" href="/admin/?controller=user"><i class="icon-group"></i>Danh sách thành viên</a>
        </li>
    <?php
    }
    ?>
</ul>
