<div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
    <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('DMC Inventory') }}
    </h2>

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div id="search" class="section bg-white dark:bg-gray-800">
            <h2>Search</h2>
            <form action="/dashboard/search" method="post">
                @csrf
                <label for="number">Number:</label>
                <input type="text" name="number" id="number">
                <button type="submit">Search</button>
            </form>

            @if (isset($message))
                <p style="font-weight: bold">
                    <span>{{ $message }}</span>
                </p>
            @endif

            @if (isset($dmc))
                <table id="results">
                    <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Color</th>
                        <th>In stock</th>
                    </tr>
                    <tr>
                        <td>{{ $dmc->number }}</td>
                        <td>{{ $dmc->name }}</td>
                        <td style="background-color:{{ $dmc->hex_code }};"></td>
                        <td>{{ $dmc->in_stock }}</td>
                    </tr>
                </table>
            @endif
        </div>

        <div id="overview" class="section bg-white dark:bg-gray-800">
            <h2>Overview</h2>
            <table id="overview">
                <tr>
                    <th>Number</th>
                    <th>Name</th>
                    <th>Color</th>
                    <th>In stock</th>
                </tr>
                @if (isset($allDmc))
                    @foreach ($allDmc as $dmc)
                        <tr>
                            <td>{{ $dmc->number }}</td>
                            <td>{{ $dmc->name }}</td>
                            <td style="background-color:{{ $dmc->hex_code }};"></td>
                            <td>{{ $dmc->in_stock }}</td>
                        </tr>
                    @endforeach
                @endif
            </table>
        </div>
    </div>
</div>
