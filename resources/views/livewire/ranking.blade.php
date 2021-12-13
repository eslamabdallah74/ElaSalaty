<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col ">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-500 sm:rounded-lg ">
        <table class="min-w-full divide-y divide-gray-200 mb-10">
          <thead class="bg-gray-900">
            <tr>
            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                #Rank
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                Gender
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
                Level
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-100 uppercase tracking-wider">
              Experience points
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($ranking as $index => $rank)

            <tr>
            <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      #{{ $order++ }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="ml-4">

                    <div
                    @auth
                        @if ($rank->users->id === auth()->user()->id)
                        class="text-sm  text-red-400 font-bold capitalize">
                        @else
                        class="text-sm font-medium text-gray-900 capitalize">
                        @endif
                    @else
                       class="text-sm font-medium text-gray-900 capitalize">
                    @endauth
                      {{ $rank->users->name }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    @if ($rank->users->gender === 1)
                        Male
                    @else
                        Female
                    @endif
               </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                {{ $rank->level }}
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $rank->exp }}
              </td>
            </tr>

            <!-- More people... -->
          </tbody>
          @endforeach
        </table>
        <div>
            {{ $ranking->links() }}
            </div>
      </div>
    </div>
  </div>
</div>

</div>
