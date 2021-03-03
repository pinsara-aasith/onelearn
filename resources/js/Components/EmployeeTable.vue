<template>
    <div class="text-gray-900 bg-gray-200">
        <div class="px-3 py-4 flex justify-center">
            <table class="w-full text-md bg-white shadow-md rounded mb-4">
                <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">Full Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th class="text-left p-3 px-5">Age</th>
                    <th></th>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5">M.K.P.A. Mallawarachchi</td>
                    <td class="p-3 px-5">aasithp@gmail.com</td>
                    <td class="p-3 px-5">56</td>
                    <td class="p-3 px-5 flex justify-end">
                        <button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                            Edit
                        </button>
                        <button type="button"
                                class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">
                            Delete
                        </button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
export default {
    name: "Table"
}
</script>

<style scoped>

</style>
