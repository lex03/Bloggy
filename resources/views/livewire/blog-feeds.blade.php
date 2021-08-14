<div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
              <div class=" container flex justify-around bg-white overflow-hidden shadow-xl sm:rounded-3xl grid grid-cols-4 pb-5 px-2 bg-gradient-to-r from-green-500 to-blue-900 ">
              @if($flag == "1")
                  @foreach($blogs as $blog)
                    @if($blog->status == TRUE)
                        <a href="/blog/{{$blog->id}}">
                            <div>
                              <div class="max-w-lg rounded-2xl shadow-lg mx-3 mt-5 bg-white py-10 ">
                            <!--   <img class="w-full" class="lazy" data-src="https://homepages.cae.wisc.edu/~ece533/images/mountain.png" alt="Mountain"> -->
                                <div class="px-6 py-4">
                                <h2 class="tracking-widest text-sm title-font font-medium text-gray-500">{{$blog->category}}</h2>
                                  <div class="font-bold title-font text-3xl font-medium text-gray-900 mb-3 overflow-hidden">{{$blog->title}}</div>
                                </div>
                                <div class="px-6 pt-4 pb-2">
                                  <span class="inline-block bg-gray-200 rounded-full px-5 py-1 text-sm font-bold text-gray-700 mr-2 mb-2">{{$blog->tag}}</span>
                                </div>
                              </div>
                          </div> 
                          </a>
                    @endif
                  @endforeach
               @elseif($flag == "2")
                  @foreach($blogs as $blog)
                        @if($blog->status == FALSE  )
                          @if($currentuser == $blog->user_id)
                            
                                <div>
                                  <div class="max-w-lg rounded-2xl shadow-lg mx-3 mt-5 bg-white py-10 ">
                                <!--   <img class="w-full" class="lazy" data-src="https://homepages.cae.wisc.edu/~ece533/images/mountain.png" alt="Mountain"> -->
                                    <div class="px-6 py-4">
                                    <h2 class="tracking-widest text-sm title-font font-medium text-gray-500">{{$blog->category}}</h2>
                                      <div class="font-bold title-font text-3xl font-medium text-gray-900 mb-3 overflow-hidden">{{$blog->title}}</div>
                                    </div>
                                    <div class="px-6 pt-4 pb-2">
                                      <span class="inline-block bg-gray-200 rounded-full px-5 py-1 text-sm font-bold text-gray-700 mr-2 mb-2">{{$blog->tag}}</span>
                                    </div>
                                    <a class=" inline-flex justify-center mx-14 px-16 py-2 my-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 cursor-pointer" 
                                      href="/editblog/{{$blog->id}}}">Edit
                                    </a>
                                  </div>
                              </div> 
                              
                              @endif
                        @endif
                    @endforeach
                @elseif($flag == "3")
                  @foreach($blogs as $blog)
                          @if($blog->status == TRUE)
                            @if($currentuser == $blog->user_id)
                              <a href="/blog/{{$blog->id}}">
                                  <div>
                                    <div class="max-w-lg rounded-2xl shadow-lg mx-3 mt-5 bg-white py-10 ">
                                  <!--   <img class="w-full" class="lazy" data-src="https://homepages.cae.wisc.edu/~ece533/images/mountain.png" alt="Mountain"> -->
                                      <div class="px-6 py-4">
                                      <h2 class="tracking-widest text-sm title-font font-medium text-gray-500">{{$blog->category}}</h2>
                                        <div class="font-bold title-font text-3xl font-medium text-gray-900 mb-3 overflow-hidden">{{$blog->title}}</div>
                                      </div>
                                      <div class="px-6 pt-4 pb-2">
                                        <span class="inline-block bg-gray-200 rounded-full px-5 py-1 text-sm font-bold text-gray-700 mr-2 mb-2">{{$blog->tag}}</span>
                                      </div>
                                    </div>
                                </div> 
                                </a>
                                @endif
                          @endif
                      @endforeach
               @endif 
   
              </div>
</div>
</div>
</div>
