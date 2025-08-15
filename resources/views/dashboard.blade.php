@role('student')
<div class="col-span-full">
    <div class="card border-0 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
        <div class="card-body p-4">
            <div class="text-center mb-4">
                <div class="bg-purple-100 rounded-full p-3 inline-flex mb-3">
                    <i class="bi bi-journal-bookmark text-3xl text-purple-500"></i>
                </div>
                <h2 class="mb-2 text-2xl font-semibold">Student Dashboard</h2>
                <p class="text-gray-500">Manage your academic activities</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Course List -->
                <div class="col-span-1">
                    <div class="card h-full border-0 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div class="card-body text-center flex flex-col h-full p-4">
                            <div class="bg-purple-100 rounded-full p-3 inline-flex mx-auto mb-3">
                                <i class="bi bi-book text-3xl text-purple-500"></i>
                            </div>
                            <h4 class="mb-2 text-xl font-semibold">Course List</h4>
                            <p class="text-gray-500 mb-3 flex-grow">View all your enrolled courses</p>
                            <a href="{{ route('payments.detail') }}" class="btn bg-purple-500 hover:bg-purple-600 text-white w-full transition-colors">View Courses</a>
                        </div>
                    </div>
                </div>
                
                <!-- Check Grades -->
                <div class="col-span-1">
                    <div class="card h-full border-0 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div class="card-body text-center flex flex-col h-full p-4">
                            <div class="bg-purple-100 rounded-full p-3 inline-flex mx-auto mb-3">
                                <i class="bi bi-award text-3xl text-purple-500"></i>
                            </div>
                            <h4 class="mb-2 text-xl font-semibold">Grades</h4>
                            <p class="text-gray-500 mb-3 flex-grow">Check your academic performance</p>
                            <a href="{{ route('payments.create') }}" class="btn bg-purple-500 hover:bg-purple-600 text-white w-full transition-colors">View Grades</a>
                        </div>
                    </div>
                </div>
                
                <!-- View Payments -->
                <div class="col-span-1">
                    <div class="card h-full border-0 shadow-sm hover:shadow-md transition-all duration-300 hover:-translate-y-1">
                        <div class="card-body text-center flex flex-col h-full p-4">
                            <div class="bg-purple-100 rounded-full p-3 inline-flex mx-auto mb-3">
                                <i class="bi bi-credit-card text-3xl text-purple-500"></i>
                            </div>
                            <h4 class="mb-2 text-xl font-semibold">Payments</h4>
                            <p class="text-gray-500 mb-3 flex-grow">View and manage payments</p>
                            <a href="{{ route('payments.index') }}" class="btn bg-purple-500 hover:bg-purple-600 text-white w-full transition-colors">View Payments</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endrole