@can('showUser')
    <div class="w-100 mb-4 mt-4">
        <h5 class="text-light mx-3">🔵 Manage Users</h5>

        <a href="{{ route('user.index') }}"
           class="{{ \Illuminate\Support\Facades\Request::path() == 'user' ? 'active__itemContainer': ' '}} each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
            <div  class="text-light w-100 h-100 h-100 d-flex justify-content-between align-items-center m-0 px-4 mx-2">
                <span>Users List</span>
                <i class="fa fa-users"></i>
            </div>
        </a>
    </div>

@endcan
<div class="w-100 mb-4">
    <h5 class="text-light mx-3">🔵 Manage Categories</h5>

    @adminOrEditor
        <a  href="{{ route('category.create') }}"
            class="{{ \Illuminate\Support\Facades\Request::path() == 'category/create' ? 'active__itemContainer' : ' ' }} text-decoration-none  each__itemContainer d-flex justify-content-center align-items-center">
            <div class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
                <span>Create Category</span>
                <i class="fa fa-plus-circle"></i>
            </div>
        </a>
    @endadminOrEditor
        <a href="{{ route("category.index") }}"
           class="{{ \Illuminate\Support\Facades\Request::path() == 'category'? 'active__itemContainer' : ' ' }} text-decoration-none each__itemContainer d-flex justify-content-center align-items-center">
            <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
                <span>Category List</span>
                <i class="fa fa-list-squares"></i>
            </div>
        </a>

</div>


<div class="w-100 mb-4">
    <h5 class="text-light mx-3">🔵 Manage Typeof</h5>
    @adminOrEditor
        <a href="{{ route("type.create") }}"
           class="{{ \Illuminate\Support\Facades\Request::path() == 'type/create' ? 'active__itemContainer' : ' ' }} each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
            <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
                <span>Add Typeof</span>
                <i class="fa fa-plus-circle"></i>
            </div>
        </a>
    @endadminOrEditor
    <a href="{{ route("type.index") }}"
       class="{{ \Illuminate\Support\Facades\Request::path() == 'type'? 'active__itemContainer' : ' ' }} each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Typeof List</span>
            <i class="fa fa-link"></i>
        </div>
    </a>

</div>

<div class="w-100 mb-4">
    <h5 class="text-danger mx-3">🔴 Manage Youtube Items </h5>

    @adminOrEditor
        <a href="{{ route("item.create") }}"
           class="{{ \Illuminate\Support\Facades\Request::path() == 'item/create'? 'active__itemContainer' : ' ' }} each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
            <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
                <span>Create Item</span>
                <i class="fa fa-plus-circle"></i>
            </div>
        </a>
    @endadminOrEditor
    <a href="{{ route('item.index') }}"
       class="{{ \Illuminate\Support\Facades\Request::path() == 'item'? 'active__itemContainer' : ' ' }} each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Items List</span>
            <i class="fa fa-layer-group"></i>
        </div>
    </a>
</div>

<div class="w-100 mb-4">
    <h5 class="text-warning mx-3">⚪ Manage Webpage Items </h5>
    @adminOrEditor
        <a href="{{ route("web.create") }}"
           class="{{ \Illuminate\Support\Facades\Request::path() == 'web/create' ? 'active__itemContainer' : ' ' }} each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
            <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
                <span>Create Item</span>
                <i class="fa fa-plus-circle"></i>
            </div>
        </a>
    @endadminOrEditor
    <a href="{{ route('web.index') }}"
       class="{{ \Illuminate\Support\Facades\Request::path() == 'web' ? 'active__itemContainer' : ' ' }} each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Items List</span>
            <i class="fa fa-layer-group"></i>
        </div>
    </a>
</div>



<div class="w-100  mt-5 mb-5">
    <h5 class="text-success mx-3">✅ Manage Clients</h5>

    <a href="{{ route("client.index") }}"
       class="{{ \Illuminate\Support\Facades\Request::path() == 'client' ? 'active__itemContainer' : ' ' }} each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Emails List</span>
            <i class="fa fa-envelope"></i>
        </div>
    </a>
    @adminOrEditor
        <a href="{{ route("client.create") }}"
           class="{{ \Illuminate\Support\Facades\Request::path() == 'client/create' ? 'active__itemContainer' : ' ' }} each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
            <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
                <span>Add Email</span>
                <i class="fa fa-envelope-open-text"></i>
            </div>
        </a>
    @endadminOrEditor
    <a href="{{ route("active.index") }}"
       class="{{ \Illuminate\Support\Facades\Request::path() == 'active' ? 'active__itemContainer' : ' ' }} each__itemContainer text-decoration-none d-flex justify-content-center align-items-center">
        <div  class="text-light w-100 h-100 d-flex justify-content-between align-items-center px-4 mx-2">
            <span>Active</span>
            <i class="fa fa-user"></i>
        </div>
    </a>
</div>


