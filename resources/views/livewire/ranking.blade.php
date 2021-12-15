<div>
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col ">
    <!-- Get user rank -->
@auth
<form wire:submit.prevent="getRank">
  <div>
     <button  class="btn btn-primary my-4" name="SeeRank" value="SeeRank">See Your Results</button>
  </div>
</form>
@endauth
<!-- User rank restults -->
@if ($UserRank)
<div class="overflow-x-auto sm:-mx-6 lg:-mx-8 my-4">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-500 sm:rounded-lg ">
        <table class="min-w-full divide-y divide-gray-200 mb-10">
          <thead class="bg-gray-900">
            <tr>
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
            <tr>
              <td class="py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="ml-4">

                    <div class="text-sm font-medium text-gray-900 capitalize">
                     {{ $UserRank->users->name }}
                    </div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">
                    @if ($UserRank->users->gender === 1)
                     <img src="{{asset('img/male.png')}}" class="h-8 inline-flex" alt="male-avatar">
                        Male
                    @else
                       <img src="{{asset('img/female.png')}}" class="h-8 inline-flex" alt="female-avatar">
                        Female
                    @endif
               </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <!-- level img -->
                <div class="p-2 inline-flex text-2xl leading-5 font-semibold rounded-full">
                    @if ($UserRank->level >= 0 && $UserRank->level < 5)
                        <img src="{{asset('img/LevelUp/stage-1.png')}}" class="h-8" alt="stage-one">
                    @elseif ($UserRank->level >= 5  && $UserRank->level < 10)
                        <img src="{{asset('img/LevelUp/stage-2.png')}}" class="h-8" alt="stage-two">
                    @elseif ($UserRank->level >= 10 && $UserRank->level < 15)
                        <img src="{{asset('img/LevelUp/stage-3.png')}}" class="h-8" alt="stage-three">
                    @elseif ($UserRank->level >= 15 && $UserRank->level < 20)
                        <img src="{{asset('img/LevelUp/stage-4.png')}}" class="h-8" alt="stage-four">
                    @elseif ($UserRank->level >= 20 )
                        <img src="{{asset('img/LevelUp/final-stage.png')}}" class="h-8" alt="final-stage">
                    @endif
                </div>
                <div class="p-2 inline-flex text-4xl font-semibold rounded-full bg-yellow-100 text-yellow-900">
                {{ $UserRank->level }}
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $UserRank->exp }}
              </td>
            </tr>

            <!-- More people... -->
          </tbody>
        </table>

      </div>
    </div>
  </div>
  @endif

<!-- end user rank -->
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
                        <img src="{{asset('img/male.png')}}" class="h-8 inline-flex" alt="male-avatar">
                        Male
                    @else
                       <img src="{{asset('img/female.png')}}" class="h-8 inline-flex" alt="female-avatar">
                        Female
                    @endif
               </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <!-- level img -->
                <div class="p-2 inline-flex text-2xl leading-5 font-semibold rounded-full">
                    @if ($rank->level >= 0 && $rank->level < 5)
                        <img src="{{asset('img/LevelUp/stage-1.png')}}" class="h-8" alt="stage-one">
                    @elseif ($rank->level >= 5  && $rank->level < 10)
                        <img src="{{asset('img/LevelUp/stage-2.png')}}" class="h-8" alt="stage-two">
                    @elseif ($rank->level >= 10 && $rank->level < 15)
                        <img src="{{asset('img/LevelUp/stage-3.png')}}" class="h-8" alt="stage-three">
                    @elseif ($rank->level >= 15 && $rank->level < 20)
                        <img src="{{asset('img/LevelUp/stage-4.png')}}" class="h-8" alt="stage-four">
                    @elseif ($rank->level >= 20 )
                        <img src="{{asset('img/LevelUp/final-stage.png')}}" class="h-8" alt="final-stage">
                    @endif
                </div>
                <div class="p-2 inline-flex text-4xl font-semibold rounded-full bg-yellow-100 text-yellow-900">
                {{ $rank->level }}
                </div>
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
