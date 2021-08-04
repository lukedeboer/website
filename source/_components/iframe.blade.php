<div {{ $attributes }}>
    <div class="shadow-lg rounded-2xl h-full">
        <div class="rounded-xl ring-1 ring-black ring-opacity-5 overflow-hidden h-full flex flex-col">
            <div class="py-2 grid items-center gap-6 px-4 rounded-tr-xl sm:rounded-t-xl bg-gradient-to-b from-gray-100 to-gray-200 dark:from-gray-700 dark:to-gray-800"
                style="grid-template-columns:1fr minmax(min-content, 640px) 1fr">
                <div class="flex space-x-1.5">
                    <div class="w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-600"></div>
                    <div class="w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-600"></div>
                    <div class="w-3 h-3 rounded-full bg-gray-300 dark:bg-gray-600"></div>
                </div>
                <div class="border border-black border-opacity-5 rounded-md overflow-hidden shadow-sm">
                    <div class="bg-gradient-to-b from-white to-gray-50 dark:from-gray-800 dark:to-gray-900 text-sm py-1.5 text-center dark:text-white">
                        <a href="https://{{$url}}">{{ $url }}</a>
                    </div>
                </div>
            </div>
            <iframe src="https://{{ $url }}" frameborder="0" class="w-full relative bg-white border-t border-gray-200 dark:border-gray-900 rounded-b-xl flex-grow">
            </iframe>
        </div>
    </div>
</div>