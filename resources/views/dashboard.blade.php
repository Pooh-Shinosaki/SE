<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    {{-- Body --}}
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        เพิ่มวิชา
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มวิชา</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('dashboard.create') }}">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">รหัสวิชา:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="sub_id">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">ชื่อวิชา:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="sub_name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">รายละเอียดวิชา:</label>
                                            <textarea class="form-control" id="message-text" name="sub_des"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">ภาค:</label>
                                            <input type="text" class="form-control" id="recipient-name" name="sub_t">
                                        </div>
                                        <div class="mb-3">
                                            <label for="message-text" class="col-form-label">ปีการศึกษา:</label>
                                            <input type="text" class="form-control" id="recipient-name"name="sub_y">
                                        </div>
                                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
