<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Report Preview</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Main Container -->
  <div class="max-w-7xl mx-auto p-6">

    <!-- Title -->
    <h1 class="text-4xl font-bold text-center text-blue-600 mb-8">My Reports</h1>

    <!-- Reports Table -->
    <div class="bg-white shadow rounded-lg overflow-hidden">
      <table class="min-w-full table-auto">
        <!-- Table Header -->
        <thead class="bg-blue-500 text-white">
          <tr>
            <th class="px-6 py-3 text-left text-sm font-medium uppercase">Report ID</th>
            <th class="px-6 py-3 text-left text-sm font-medium uppercase">Category</th>
            <th class="px-6 py-3 text-left text-sm font-medium uppercase">Details</th>
            <th class="px-6 py-3 text-left text-sm font-medium uppercase">Status</th>
            <th class="px-6 py-3 text-left text-sm font-medium uppercase">Submitted On</th>
          </tr>
        </thead>

        <!-- Table Body -->
        <tbody class="divide-y divide-gray-200">
          <!-- Example Report Row -->
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm font-medium">1</td>
            <td class="px-6 py-4 text-sm">Complaint</td>
            <td class="px-6 py-4 text-sm">The university Wi-Fi is very slow and unreliable.</td>
            <td class="px-6 py-4 text-sm">
              <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-xs font-semibold">Pending</span>
            </td>
            <td class="px-6 py-4 text-sm">January 20, 2025</td>
          </tr>

          <!-- Example Report Row -->
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm font-medium">2</td>
            <td class="px-6 py-4 text-sm">Suggestion</td>
            <td class="px-6 py-4 text-sm">It would be great to have more trees on campus for shade.</td>
            <td class="px-6 py-4 text-sm">
              <span class="bg-green-200 text-green-800 px-3 py-1 rounded-full text-xs font-semibold">Reviewed</span>
            </td>
            <td class="px-6 py-4 text-sm">January 21, 2025</td>
          </tr>

          <!-- Example Report Row -->
          <tr class="hover:bg-gray-50">
            <td class="px-6 py-4 text-sm font-medium">3</td>
            <td class="px-6 py-4 text-sm">Feedback</td>
            <td class="px-6 py-4 text-sm">The new library hours are very convenient for students.</td>
            <td class="px-6 py-4 text-sm">
              <span class="bg-yellow-200 text-yellow-800 px-3 py-1 rounded-full text-xs font-semibold">Pending</span>
            </td>
            <td class="px-6 py-4 text-sm">January 22, 2025</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</body>
</html>
