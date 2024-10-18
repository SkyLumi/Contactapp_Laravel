<div class="flex justify-between items-center mb-4">
    <input
        type="text"
        id="{{ $inputId }}"
        placeholder="Search contacts..."
        class="w-1/3 p-3 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
    >
    <div class="flex items-center">
        <label for="{{ $entriesId }}" class="mr-2 text-gray-700 dark:text-gray-300">Show:</label>
        <select
            id="{{ $entriesId }}"
            class="p-2 border rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:border-gray-600 dark:text-white"
        >
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
        </select>
    </div>
</div>
