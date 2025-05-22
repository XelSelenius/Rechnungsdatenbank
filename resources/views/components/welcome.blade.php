<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <x-application-logo/>

    <h1 class="mt-8 text-2xl font-medium text-gray-900 text-center">
        Welcome to your Rechnungsdatenbank!
    </h1>

    <p class="mt-6 text-gray-500 leading-relaxed text-center">
       Rechnungsdatenbank provides a simple and elegant way to manage your invoices. Graphs and statistics are available to help you keep track of your business. Regardless if you are single or have a family, Rechnungsdatenbank is the perfect solution for you. Below you can find some of the features that we offer:
    </p>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">

    {{--Ledger--}}
    <div>
        <div class="flex items-center">
            <img src="{{ asset('storage/icons/receipt.png') }}" alt="Receipt Icon" class="w-6 h-6 object-contain text-gray-400">

            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="https://laravel.com/docs">Ledger</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            The Ledger is where you log your spending and earnings. You can also add a description and a date. Furthermore, you could add a category to the transaction as well as location of purchase.
        </p>

        <p class="mt-4 text-sm">
            <a href="https://rechnungsdatenbank.test/docs" class="inline-flex items-center font-semibold text-indigo-700">
                New user? Check out the documentation

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    {{--Charts--}}
    <div>
        <div class="flex items-center">
            <img src="{{ asset('storage/icons/chart.png') }}" alt="Chart Icon" class="w-6 h-6 object-contain text-gray-400">

            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="https://laracasts.com">Monthly Chart</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            The monthly chart can provide a visual overview on what is spent and where. Also it can visualize how much it has been saved compared to previous months as well as in total.
        </p>

        <p class="mt-4 text-sm">
            <a href="https://laracasts.com" class="inline-flex items-center font-semibold text-indigo-700">
                Start watching Laracasts3

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" class="ms-1 w-5 h-5 fill-indigo-500">
                    <path fill-rule="evenodd" d="M5 10a.75.75 0 01.75-.75h6.638L10.23 7.29a.75.75 0 111.04-1.08l3.5 3.25a.75.75 0 010 1.08l-3.5 3.25a.75.75 0 11-1.04-1.08l2.158-1.96H5.75A.75.75 0 015 10z" clip-rule="evenodd" />
                </svg>
            </a>
        </p>
    </div>

    {{--Warranty Ledger--}}
    <div>
        <div class="flex items-center">
            <img src="{{ asset('storage/icons/warranty.png') }}" alt="Warranty Icon" class="w-6 h-6 object-contain text-gray-400">

            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                <a href="https://tailwindcss.com/">Warranty Ledger</a>
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            If you have purchased an appliance or a device, it most likely has a warranty. It can be overwhelming to remember all the dates and amounts of the warranty. Rechnungsdatenbank can help you keep track of your warranty.
        </p>
    </div>

    {{--Bonds--}}
    <div>
        <div class="flex items-center">
            <img src="{{ asset('storage/icons/bonds.png') }}" alt="Bond Icon" class="w-6 h-6 object-contain text-gray-400">

            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                 Bonds
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            If you are purchasing stocks or perhaps have investments in currency or precious metals, you can use the bonds feature to keep track of your investments. In the future it will provide API integration with the Stock Exchange or other such.
        </p>
    </div>

    {{--Group Ledger--}}
    <div>
        <div class="flex items-center">
            <img src="{{ asset('storage/icons/group-ledger.png') }}" alt="Receipt Icon" class="w-6 h-6 object-contain text-gray-400">

            <h2 class="ms-3 text-xl font-semibold text-gray-900">
                Group Ledger
            </h2>
        </div>

        <p class="mt-4 text-gray-500 text-sm leading-relaxed">
            To view your team's spending you need to be group admin first. Second, you can use this feature just like the regular monthly chart so you can visualize how much the Team has saved compared to previous months as well as in total.
        </p>
    </div>
</div>
