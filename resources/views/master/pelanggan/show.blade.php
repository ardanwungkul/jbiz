<x-app-layout>

    <section class="bg-white dark:bg-gray-900 pt-3 mx-3 ">
        <div class="pb-3 pt-2 px-4 mx-auto mt-5 rounded-xl max-w-2xl lg:pb-6 lg:pt-2 dark:bg-gray-800">

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6 mt-2">
                        {{-- header --}}
                        
                        <div class="w-full">
                            <p class="sm:text-sm md:text-sm text-gray-300 font-black font-sans text-2xl">{{$pelanggan->nama_pelanggan}}</p>
                        </div>

                        
                      
                        <div class="flex items-center col-span-2">
                            <div class="border-t-2 border-b-2 h-2 border-gray-400 flex-grow"></div>
                            <div class="border-t-2 border-b-2 h-2 border-gray-400 flex-grow"></div>
                        </div>
                    

                    
                    <div class="grid grid-cols-4 col-span-2 ">
                        <label for="alamat" class="col-span-1 block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                        <input disabled type="text" value="{{$pelanggan->alamat}}" name="alamat" id="alamat" class="col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div class="grid grid-cols-4 col-span-2">
                        <label for="no_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nomor Hp</label>
                        <input disabled type="text" value="{{$pelanggan->no_hp}}" name="no_hp" id="no_hp" class="col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
                    </div>
                    <div class="grid grid-cols-4 col-span-2">
                        <label for="link_history" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Link History</label>
                       <div class="bg-gray-50 border col-span-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500">
                           <a href="//{{$pelanggan->link_history}}" class="">{{$pelanggan->link_history}}</a>
                        </div>
                           {{-- <input  disabled  type="url" value="{{$pelanggan->link_history}}"  name="link_history" id="link_history" class="bg-gray-50 border col-span-3 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500"  required=""> --}}
                    </div>

                    <div class="grid grid-cols-4 col-span-2"> 
                        <label for="status_domain" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Daftar Domain</label>
                        <select onchange="location = this.value;" id="status_domain" name="status_domain" class="col-span-3 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected disabled >Lihat Semua Daftar Domain</option>
                            @foreach ($data as $item)
                            <option value="/domain/{{$item->id}}">{{$item->nama_domain}}</option>
                            
                            @endforeach
                        </select>
                    </div>
                            
                         

                    
                    <div class="grid grid-cols-4 col-span-2">
                        <label for="keterangan_pelanggan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Keterangan</label>
                        <textarea disabled id="keterangan_pelanggan" name="keterangan_pelanggan" rows="8" class=" col-span-3 h-40 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-gray-300 dark:focus:ring-primary-500 dark:focus:border-primary-500">{{$pelanggan->keterangan_pelanggan}}</textarea>
                    </div>
                </div>
                <div class="grid grid-cols-4 col-span-2">
                    <button onclick="history.back()" class=" col-end-5 bg-gray-900 text-white p-3 rounded shadow-sm focus:outline-none hover:bg-indigo-700inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center bg-primary-700 focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Kembali
                    </button>
                </div>
            </form>
        </div>
      </section>

</x-app-layout>
