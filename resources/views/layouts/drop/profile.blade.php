<div
    class="edit__profile__container bg-primary p-2 animate__animated animate__fadeIn animate__faster
        @if(!$errors->has('photo'))
            display__action
        @endif
        "
    id="profileStatus"
>

    <div class="d-flex flex-column align-items-center justify-content-center p-5 w-100">
        <i class="fa fa-close text-light itemClose" id="profileClose"></i>

       {{-- FIRST ROLE FOR ( Manage FILE ) --}}
        <div class="mb-5 position-relative profile__first__case d-flex justify-content-center w-100 ">
            <form class="w-100 flex-column align-items-center d-flex justify-content-center"  id="saveForm" action="{{ route("user.update",\Illuminate\Support\Facades\Auth::user()->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')

                <div
                    id=""
                    class="show__profile_logo profile__status position-relative"
                    style="background-image:url(
                    {{ \Illuminate\Support\Facades\Auth::user()->logo == "profile.png"
                        ? asset('images/'.\Illuminate\Support\Facades\Auth::user()->logo)
                        : asset('storage/profiles/'.\Illuminate\Support\Facades\Auth::user()->logo)
                        }})"
                >
                    <div class="edit__profile__logoContainer d-flex justify-content-center align-items-center">
                        <i class="fa fa-file-edit text-light edit__profile__logo text-center" id="profileEdit"></i>
                    </div>
                </div>
                <input type="file" name="photo" id="profile" hidden>
                @error('photo')
                    <div class="text-danger h5 w-100 text-nowrap mt-3 text-center">{{ $message }}</div>
                @enderror


            </form>

        </div>
        <button
            type="submit"
            form="saveForm"
            id="saveBtn"
            class=" btn btn-primary border-light save__editProfile d-flex align-items-center"
        >
            <span>Save</span>
            <div class="mx-2"></div>
            <i class="fa fa-save"></i>

        </button>

       {{-- SECOND ROLE FOR ( Manage USER NAME ) --}}
        <div class="mb-5 profile__second__case d-flex flex-column justify-content-center align-items-center">
           <div class=" position-relative" id="currentName">
               <h3 class="text-light d-flex justify-content-between align-content-center">
                   <i class="text-light fa fa-user text-start mx-3"></i>
                   <span>{{ \Illuminate\Support\Facades\Auth::user()->name }}</span>
               </h3>
               <i class="fa fa-user-edit text-light edit__profile__logo text-center" id="editName"></i>

           </div>


           <div class="display__action position-relative mb-3"  id="updateName">
               <input
                   type="text" name="name"
                   value="{{ \Illuminate\Support\Facades\Auth::user()->name }}"
                   form="saveForm"
                   class="form-control form-control-lg bg-primary border-light text-light text-center"
               >
               <i class="fa fa-close text-light edit__profile__logo text-center closeStatus" id="editNameClose"></i>
           </div>
            @error('name')
                <div class="text-danger h5 w-100">{{ $message }}</div>
            @enderror
        </div>

      {{--  THIRT ROLE FOR ( MANAGE EMAIL ) --}}
        <div class="profile__third__case d-flex justify-content-center align-items-center">
           <div class="position-relative">
               <h4 class="text-light d-flex justify-content-between align-content-center">
                   <i class="fa fa-envelope-open text-light mx-3"></i>
                   <span>{{ \Illuminate\Support\Facades\Auth::user()->email }}</span>
               </h4>
               {{--<div class="edit__profile__logoCase d-flex justify-content-center align-items-center">
                   <i class="fa fa-edit text-light edit__profile__logo w-100 text-center"></i>
               </div>--}}
           </div>
        </div>
    </div>
</div>
