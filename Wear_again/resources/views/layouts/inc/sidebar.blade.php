<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="#" class="simple-text logo-normal">
        Wear again
      </a></div>
    <div class="sidebar-wrapper">
      <ul class="nav">
        <li class="nav-item active  ">
          <a class="nav-link" href="/dashboard">
            <i class="material-icons">dashboard</i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('categories')}}">
            <i class="material-icons">table</i>
            <p>Categories</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('add category')}}">
            <i class="material-icons">table</i>
            <p> Add Category</p>
          </a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="{{url('edit-cate/{id}')}}">
            <i class="material-icons">table</i>
            <p> Edit Category</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('subcategories')}}">
            <i class="material-icons">category</i>
            <p>  Subcategory</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('add_subcategory')}}">
            <i class="material-icons">category</i>
            <p> Add Subcategory</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('subcategories')}}">
            <i class="material-icons">category</i>
            <p> Edit Subcategory</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('user')}}">
            <i class="material-icons">person</i>
            <p> Users</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('add_subcategor')}}">
            <i class="material-icons">person</i>
            <p>Add Users</p>
          </a>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="{{url('user')}}">
            <i class="material-icons">person</i>
            <p>Edit Users</p>
          </a>
        </li>
      </ul>
    </div>
  </div>