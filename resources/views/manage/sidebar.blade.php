<div class="w-100 mb-4">
    <h5 class="text-light mx-3">🔵 Manage Users</h5>

    <a href="{{ route('user.index') }}" class=" each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 h-100 d-flex justify-content-between align-items-center m-0 px-4 mx-2">
            <span>Users List</span>
            <i class="fa fa-users"></i>
        </div>
    </a>
</div>

<div class="w-100 mb-4">
    <h5 class="text-light mx-3">🔵 Manage Categories</h5>

    <a  href="{{ route('category.create') }}" class=" text-decoration-none  each__itemContainer d-flex justify-content-center align-items-center">
        <div class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Create Category</span>
            <i class="fa fa-plus-circle"></i>
        </div>
    </a>
    <a href="{{ route("category.index") }}" class=" text-decoration-none each__itemContainer d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Category List</span>
            <i class="fa fa-list-squares"></i>
        </div>
    </a>
</div>


<div class="w-100 mb-4">
    <h5 class="text-light mx-3">🔵 Manage Typeof</h5>

    <a href="{{ route("type.create") }}" class=" each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Add Typeof</span>
            <i class="fa fa-plus-circle"></i>
        </div>
    </a>
    <a href="{{ route("type.index") }}" class=" each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Typeof List</span>
            <i class="fa fa-link"></i>
        </div>
    </a>

</div>

<div class="w-100 mb-4">
    <h5 class="text-danger mx-3">🔴 Manage Youtube Items </h5>

    <a href="{{ route("item.create") }}" class=" each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Create Item</span>
            <i class="fa fa-plus-circle"></i>
        </div>
    </a>
    <a href="{{ route('item.index') }}" class=" each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Items List</span>
            <i class="fa fa-layer-group"></i>
        </div>
    </a>
</div>

<div class="w-100 mb-4">
    <h5 class="text-warning mx-3">⚪ Manage Webpage Items </h5>

    <a href="{{ route("web.create") }}" class=" each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Create Item</span>
            <i class="fa fa-plus-circle"></i>
        </div>
    </a>
    <a href="{{ route('web.index') }}" class=" each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Items List</span>
            <i class="fa fa-layer-group"></i>
        </div>
    </a>
</div>



<div class="w-100  mt-5">
    <h5 class="text-success mx-3">✅ Manage Clients</h5>

    <a href="{{ route("client.index") }}" class=" each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Emails List</span>
            <i class="fa fa-envelope"></i>
        </div>
    </a>
    <a href="{{ route("client.create") }}" class=" each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Add Email</span>
            <i class="fa fa-envelope-open-text"></i>
        </div>
    </a>
    <a href="{{ route("active.index") }}" class=" each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Active</span>
            <i class="fa fa-user"></i>
        </div>
    </a>
</div>


