<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    {{-- 以下にtailwind.css --}}
                    
                    <x-input-error :messages="$errors->all()" class="mt-2" />{{-- バリデーションエラー時のエラー文表示 --}}

                    <section class="text-gray-600 body-font relative">
                      <form action="{{ route('contacts.store') }}" method="post">
                        @csrf
                        <div class="container px-5 mx-auto">
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                                  <input type="text" id="name" name="name" value="{{old('name')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                                  <input type="text" id="title" name="title" value="{{old('title')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="email" class="leading-7 text-sm text-gray-600">メールアドレス</label>
                                  <input type="text" id="email" name="email" value="{{old('email')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="url" class="leading-7 text-sm text-gray-600">ホームページ</label>
                                  <input type="url" id="url" name="url" value="{{old('url')}}" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label class="leading-7 text-sm text-gray-600">性別</label><br>
                                  <input type="radio" name="gender" value="0">男性
                                  <input type="radio" name="gender" value="1">女性
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="age" class="leading-7 text-sm text-gray-600">年齢</label>
                                  <select name="age" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                    <option value="">選択してください</option>
                                  @for ($age=1; $age<=80; $age++)
                                  <option value="{{$age}}">{{$age}}</option>
                                  @endfor
                                </select>
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="contact" class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                                  <textarea id="contact" name="contact" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out">{{old('contact')}}</textarea>
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <input type="checkbox" id="caution" name="caution">個人情報取扱いに同意する
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">問い合わせ内容を送信する</button>
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                      </section>
                    
                      {{-- end tailwind --}}

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
