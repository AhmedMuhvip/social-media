<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
</head>
<body class="bg-gray-900">
<section class=" py-8 antialiased  md:py-8">
    <div class="mx-auto max-w-screen-lg px-4 2xl:px-0">
        <nav class="mb-4 flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                <li class="inline-flex items-center">
                    <a href="#"
                       class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white">
                        <svg class="me-2 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                             height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                        </svg>
                        Home
                    </a>
                </li>
                <li>
                    <div class="flex items-center">
                        <svg class="mx-1 h-4 w-4 text-gray-400 rtl:rotate-180" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m9 5 7 7-7 7"/>
                        </svg>
                        <x-nav-link href="/profile" :active="request()->is('profile')">My Profile</x-nav-link>
                    </div>
                </li>
            </ol>
            <button type="button" data-modal-target="accountInformationModal2"
                    data-modal-toggle="accountInformationModal2"
                    class="inline-flex w-full items-center justify-center rounded-lg bg-primary-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800 sm:w-auto">
                <svg class="-ms-0.5 me-1.5 h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                     height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"></path>
                </svg>
                Edit your data
            </button>
        </nav>
        <h2 class="mb-4 text-xl font-semibold text-white sm:text-2xl md:mb-6">General overview</h2>
        <div class="py-4 md:py-8">
            <div class="mb-4 grid gap-4 sm:grid-cols-2 sm:gap-8 lg:gap-16">
                <div class="space-y-4">
                    <div class="flex space-x-4">
                        <img class="h-16 w-16 rounded-lg"
                             src=""
                             alt="Helene avatar"/>
                        <div>
                            <span
                                class="mb-2 inline-block rounded bg-primary-100 px-2.5 py-0.5 text-xs font-medium text-primary-800 dark:bg-primary-900 dark:text-primary-300"> PRO Account </span>
                            <h2 class="flex items-center text-xl font-bold leading-none text-white sm:text-2xl">
                            </h2>
                        </div>
                    </div>
                    <dl class="">
                        <dt class="font-semibold text-white">Email Address</dt>
                        <dd class="text-gray-500 dark:text-gray-400"></dd>
                    </dl>
                    <dl>
                        <dt class="font-semibold text-white">Phone Number</dt>
                        <dd class="text-gray-500 dark:text-gray-400">+1234 567 890 / +12 345 678</dd>
                    </dl>
                </div>
                <div class="space-y-4">

                </div>
            </div>
            <!-- Account Information Modal -->
            <div id="accountInformationModal2" tabindex="-1" aria-hidden="true"
                 class="max-h-auto fixed left-0 right-0 top-0 z-50 hidden h-[calc(100%-1rem)] max-h-full w-full items-center justify-center overflow-y-auto overflow-x-hidden antialiased md:inset-0">
                <div class="max-h-auto relative max-h-full w-full max-w-lg p-4">
                    <!-- Modal content -->
                    <div class="relative rounded-lg bg-white shadow dark:bg-gray-800">
                        <!-- Modal header -->
                        <div
                            class="flex items-center justify-between rounded-t border-b border-gray-200 p-4 dark:border-gray-700 md:p-5">
                            <h3 class="text-lg font-semibold text-white">Account Information</h3>
                            <button type="button"
                                    class="ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-transparent text-sm text-gray-400 hover:bg-gray-200 hover:text-gray-900 dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="accountInformationModal2">
                                <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                     viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                          stroke-width="2"
                                          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <form class="p-4 md:p-5">
                            <div class="mb-5 grid grid-cols-1 gap-4 sm:grid-cols-2">
                                <div class="col-span-2">
                                    <label for="pick-up-point-input"
                                           class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Pick-up
                                        point* </label>
                                    <input type="text" id="pick-up-point-input"
                                           class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                           placeholder="Enter the pick-up point name" required/>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="full_name_info_modal"
                                           class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Your
                                        Full
                                        Name* </label>
                                    <input type="text" id="full_name_info_modal"
                                           class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                           placeholder="Enter your first name" required/>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="email_info_modal"
                                           class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Your
                                        Email* </label>
                                    <input type="text" id="email_info_modal"
                                           class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                           placeholder="Enter your email here" required/>
                                </div>

                                <div class="col-span-2">
                                    <label for="phone-input_billing_modal"
                                           class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Phone
                                        Number* </label>
                                    <div class="flex items-center">
                                        <button id="dropdown_phone_input__button_billing_modal"
                                                data-dropdown-toggle="dropdown_phone_input_billing_modal"
                                                class="z-10 inline-flex shrink-0 items-center rounded-s-lg border border-gray-300 bg-gray-100 px-4 py-2.5 text-center text-sm font-medium text-gray-900 hover:bg-gray-200 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-700"
                                                type="button">
                                            <svg fill="none" aria-hidden="true" class="me-2 h-4 w-4"
                                                 viewBox="0 0 20 15">
                                                <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                                                <mask id="a" style="mask-type:luminance" width="20" height="15" x="0"
                                                      y="0"
                                                      maskUnits="userSpaceOnUse">
                                                    <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                                                </mask>
                                                <g mask="url(#a)">
                                                    <path fill="#D02F44" fill-rule="evenodd"
                                                          d="M19.6.5H0v.933h19.6V.5zm0 1.867H0V3.3h19.6v-.933zM0 4.233h19.6v.934H0v-.934zM19.6 6.1H0v.933h19.6V6.1zM0 7.967h19.6V8.9H0v-.933zm19.6 1.866H0v.934h19.6v-.934zM0 11.7h19.6v.933H0V11.7zm19.6 1.867H0v.933h19.6v-.933z"
                                                          clip-rule="evenodd"/>
                                                    <path fill="#46467F" d="M0 .5h8.4v6.533H0z"/>
                                                    <g filter="url(#filter0_d_343_121520)">
                                                        <path
                                                            fill="url(#paint0_linear_343_121520)"
                                                            fill-rule="evenodd"
                                                            d="M1.867 1.9a.467.467 0 11-.934 0 .467.467 0 01.934 0zm1.866 0a.467.467 0 11-.933 0 .467.467 0 01.933 0zm1.4.467a.467.467 0 100-.934.467.467 0 000 .934zM7.467 1.9a.467.467 0 11-.934 0 .467.467 0 01.934 0zM2.333 3.3a.467.467 0 100-.933.467.467 0 000 .933zm2.334-.467a.467.467 0 11-.934 0 .467.467 0 01.934 0zm1.4.467a.467.467 0 100-.933.467.467 0 000 .933zm1.4.467a.467.467 0 11-.934 0 .467.467 0 01.934 0zm-2.334.466a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.466a.467.467 0 11-.933 0 .467.467 0 01.933 0zM1.4 4.233a.467.467 0 100-.933.467.467 0 000 .933zm1.4.467a.467.467 0 11-.933 0 .467.467 0 01.933 0zm1.4.467a.467.467 0 100-.934.467.467 0 000 .934zM6.533 4.7a.467.467 0 11-.933 0 .467.467 0 01.933 0zM7 6.1a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.467a.467.467 0 11-.933 0 .467.467 0 01.933 0zM3.267 6.1a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.467a.467.467 0 11-.934 0 .467.467 0 01.934 0z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </g>
                                                </g>
                                                <defs>
                                                    <linearGradient id="paint0_linear_343_121520" x1=".933" x2=".933"
                                                                    y1="1.433"
                                                                    y2="6.1" gradientUnits="userSpaceOnUse">
                                                        <stop stop-color="#fff"/>
                                                        <stop offset="1" stop-color="#F0F0F0"/>
                                                    </linearGradient>
                                                    <filter id="filter0_d_343_121520" width="6.533" height="5.667"
                                                            x=".933"
                                                            y="1.433" color-interpolation-filters="sRGB"
                                                            filterUnits="userSpaceOnUse">
                                                        <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                        <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                                                       values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                                        <feOffset dy="1"/>
                                                        <feColorMatrix
                                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/>
                                                        <feBlend in2="BackgroundImageFix"
                                                                 result="effect1_dropShadow_343_121520"/>
                                                        <feBlend in="SourceGraphic" in2="effect1_dropShadow_343_121520"
                                                                 result="shape"/>
                                                    </filter>
                                                </defs>
                                            </svg>
                                            +1
                                            <svg class="-me-0.5 ms-2 h-4 w-4" aria-hidden="true"
                                                 xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                                 viewBox="0 0 24 24">
                                                <path stroke="currentColor" stroke-linecap="round"
                                                      stroke-linejoin="round"
                                                      stroke-width="2" d="m19 9-7 7-7-7"/>
                                            </svg>
                                        </button>
                                        <div id="dropdown_phone_input_billing_modal"
                                             class="z-10 hidden w-56 divide-y divide-gray-100 rounded-lg bg-white shadow dark:bg-gray-700">
                                            <ul class="p-2 text-sm font-medium text-gray-700 dark:text-gray-200"
                                                aria-labelledby="dropdown_phone_input__button_billing_modal">
                                                <li>
                                                    <button type="button"
                                                            class="inline-flex w-full rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                            role="menuitem">
                        <span class="inline-flex items-center">
                          <svg fill="none" aria-hidden="true" class="me-2 h-4 w-4" viewBox="0 0 20 15">
                            <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                            <mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0"
                                  maskUnits="userSpaceOnUse">
                              <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                            </mask>
                            <g mask="url(#a)">
                              <path fill="#D02F44" fill-rule="evenodd"
                                    d="M19.6.5H0v.933h19.6V.5zm0 1.867H0V3.3h19.6v-.933zM0 4.233h19.6v.934H0v-.934zM19.6 6.1H0v.933h19.6V6.1zM0 7.967h19.6V8.9H0v-.933zm19.6 1.866H0v.934h19.6v-.934zM0 11.7h19.6v.933H0V11.7zm19.6 1.867H0v.933h19.6v-.933z"
                                    clip-rule="evenodd"/>
                              <path fill="#46467F" d="M0 .5h8.4v6.533H0z"/>
                              <g filter="url(#filter0_d_343_121520)">
                                <path
                                    fill="url(#paint0_linear_343_121520)"
                                    fill-rule="evenodd"
                                    d="M1.867 1.9a.467.467 0 11-.934 0 .467.467 0 01.934 0zm1.866 0a.467.467 0 11-.933 0 .467.467 0 01.933 0zm1.4.467a.467.467 0 100-.934.467.467 0 000 .934zM7.467 1.9a.467.467 0 11-.934 0 .467.467 0 01.934 0zM2.333 3.3a.467.467 0 100-.933.467.467 0 000 .933zm2.334-.467a.467.467 0 11-.934 0 .467.467 0 01.934 0zm1.4.467a.467.467 0 100-.933.467.467 0 000 .933zm1.4.467a.467.467 0 11-.934 0 .467.467 0 01.934 0zm-2.334.466a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.466a.467.467 0 11-.933 0 .467.467 0 01.933 0zM1.4 4.233a.467.467 0 100-.933.467.467 0 000 .933zm1.4.467a.467.467 0 11-.933 0 .467.467 0 01.933 0zm1.4.467a.467.467 0 100-.934.467.467 0 000 .934zM6.533 4.7a.467.467 0 11-.933 0 .467.467 0 01.933 0zM7 6.1a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.467a.467.467 0 11-.933 0 .467.467 0 01.933 0zM3.267 6.1a.467.467 0 100-.933.467.467 0 000 .933zm-1.4-.467a.467.467 0 11-.934 0 .467.467 0 01.934 0z"
                                    clip-rule="evenodd"
                                />
                              </g>
                            </g>
                            <defs>
                              <linearGradient id="paint0_linear_343_121520" x1=".933" x2=".933" y1="1.433" y2="6.1"
                                              gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff"/>
                                <stop offset="1" stop-color="#F0F0F0"/>
                              </linearGradient>
                              <filter id="filter0_d_343_121520" width="6.533" height="5.667" x=".933" y="1.433"
                                      color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                <feOffset dy="1"/>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/>
                                <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_343_121520"/>
                                <feBlend in="SourceGraphic" in2="effect1_dropShadow_343_121520" result="shape"/>
                              </filter>
                            </defs>
                          </svg>
                          United States (+1)
                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button"
                                                            class="inline-flex w-full rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                            role="menuitem">
                        <span class="inline-flex items-center">
                          <svg class="me-2 h-4 w-4" fill="none" viewBox="0 0 20 15">
                            <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                            <mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0"
                                  maskUnits="userSpaceOnUse">
                              <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                            </mask>
                            <g mask="url(#a)">
                              <path fill="#0A17A7" d="M0 .5h19.6v14H0z"/>
                              <path fill="#fff" fill-rule="evenodd"
                                    d="M-.898-.842L7.467 4.8V-.433h4.667V4.8l8.364-5.642L21.542.706l-6.614 4.46H19.6v4.667h-4.672l6.614 4.46-1.044 1.549-8.365-5.642v5.233H7.467V10.2l-8.365 5.642-1.043-1.548 6.613-4.46H0V5.166h4.672L-1.941.706-.898-.842z"
                                    clip-rule="evenodd"/>
                              <path stroke="#DB1F35" stroke-linecap="round" stroke-width=".667"
                                    d="M13.067 4.933L21.933-.9M14.009 10.088l7.947 5.357M5.604 4.917L-2.686-.67M6.503 10.024l-9.189 6.093"/>
                              <path fill="#E6273E" fill-rule="evenodd"
                                    d="M0 8.9h8.4v5.6h2.8V8.9h8.4V6.1h-8.4V.5H8.4v5.6H0v2.8z" clip-rule="evenodd"/>
                            </g>
                          </svg>
                          United Kingdom (+44)
                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button"
                                                            class="inline-flex w-full rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                            role="menuitem">
                        <span class="inline-flex items-center">
                          <svg class="me-2 h-4 w-4" fill="none" viewBox="0 0 20 15" xmlns="http://www.w3.org/2000/svg">
                            <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                            <mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0"
                                  maskUnits="userSpaceOnUse">
                              <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                            </mask>
                            <g mask="url(#a)">
                              <path fill="#0A17A7" d="M0 .5h19.6v14H0z"/>
                              <path fill="#fff" stroke="#fff" stroke-width=".667"
                                    d="M0 .167h-.901l.684.586 3.15 2.7v.609L-.194 6.295l-.14.1v1.24l.51-.319L3.83 5.033h.73L7.7 7.276a.488.488 0 00.601-.767L5.467 4.08v-.608l2.987-2.134a.667.667 0 00.28-.543V-.1l-.51.318L4.57 2.5h-.73L.66.229.572.167H0z"/>
                              <path fill="url(#paint0_linear_374_135177)" fill-rule="evenodd"
                                    d="M0 2.833V4.7h3.267v2.133c0 .369.298.667.666.667h.534a.667.667 0 00.666-.667V4.7H8.2a.667.667 0 00.667-.667V3.5a.667.667 0 00-.667-.667H5.133V.5H3.267v2.333H0z"
                                    clip-rule="evenodd"/>
                              <path fill="url(#paint1_linear_374_135177)" fill-rule="evenodd"
                                    d="M0 3.3h3.733V.5h.934v2.8H8.4v.933H4.667v2.8h-.934v-2.8H0V3.3z"
                                    clip-rule="evenodd"/>
                              <path
                                  fill="#fff"
                                  fill-rule="evenodd"
                                  d="M4.2 11.933l-.823.433.157-.916-.666-.65.92-.133.412-.834.411.834.92.134-.665.649.157.916-.823-.433zm9.8.7l-.66.194.194-.66-.194-.66.66.193.66-.193-.193.66.193.66-.66-.194zm0-8.866l-.66.193.194-.66-.194-.66.66.193.66-.193-.193.66.193.66-.66-.193zm2.8 2.8l-.66.193.193-.66-.193-.66.66.193.66-.193-.193.66.193.66-.66-.193zm-5.6.933l-.66.193.193-.66-.193-.66.66.194.66-.194-.193.66.193.66-.66-.193zm4.2 1.167l-.33.096.096-.33-.096-.33.33.097.33-.097-.097.33.097.33-.33-.096z"
                                  clip-rule="evenodd"
                              />
                            </g>
                            <defs>
                              <linearGradient id="paint0_linear_374_135177" x1="0" x2="0" y1=".5" y2="7.5"
                                              gradientUnits="userSpaceOnUse">
                                <stop stop-color="#fff"/>
                                <stop offset="1" stop-color="#F0F0F0"/>
                              </linearGradient>
                              <linearGradient id="paint1_linear_374_135177" x1="0" x2="0" y1=".5" y2="7.033"
                                              gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF2E3B"/>
                                <stop offset="1" stop-color="#FC0D1B"/>
                              </linearGradient>
                            </defs>
                          </svg>
                          Australia (+61)
                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button"
                                                            class="inline-flex w-full rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                            role="menuitem">
                        <span class="inline-flex items-center">
                          <svg class="me-2 h-4 w-4" fill="none" viewBox="0 0 20 15">
                            <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                            <mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0"
                                  maskUnits="userSpaceOnUse">
                              <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                            </mask>
                            <g mask="url(#a)">
                              <path fill="#262626" fill-rule="evenodd" d="M0 5.167h19.6V.5H0v4.667z"
                                    clip-rule="evenodd"/>
                              <g filter="url(#filter0_d_374_135180)">
                                <path fill="#F01515" fill-rule="evenodd" d="M0 9.833h19.6V5.167H0v4.666z"
                                      clip-rule="evenodd"/>
                              </g>
                              <g filter="url(#filter1_d_374_135180)">
                                <path fill="#FFD521" fill-rule="evenodd" d="M0 14.5h19.6V9.833H0V14.5z"
                                      clip-rule="evenodd"/>
                              </g>
                            </g>
                            <defs>
                              <filter id="filter0_d_374_135180" width="19.6" height="4.667" x="0" y="5.167"
                                      color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                <feOffset/>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/>
                                <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_374_135180"/>
                                <feBlend in="SourceGraphic" in2="effect1_dropShadow_374_135180" result="shape"/>
                              </filter>
                              <filter id="filter1_d_374_135180" width="19.6" height="4.667" x="0" y="9.833"
                                      color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                <feOffset/>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/>
                                <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_374_135180"/>
                                <feBlend in="SourceGraphic" in2="effect1_dropShadow_374_135180" result="shape"/>
                              </filter>
                            </defs>
                          </svg>
                          Germany (+49)
                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button"
                                                            class="inline-flex w-full rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                            role="menuitem">
                        <span class="inline-flex items-center">
                          <svg class="me-2 h-4 w-4" fill="none" viewBox="0 0 20 15">
                            <rect width="19.1" height="13.5" x=".25" y=".75" fill="#fff" stroke="#F5F5F5"
                                  stroke-width=".5" rx="1.75"/>
                            <mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0"
                                  maskUnits="userSpaceOnUse">
                              <rect width="19.1" height="13.5" x=".25" y=".75" fill="#fff" stroke="#fff"
                                    stroke-width=".5" rx="1.75"/>
                            </mask>
                            <g mask="url(#a)">
                              <path fill="#F44653" d="M13.067.5H19.6v14h-6.533z"/>
                              <path fill="#1035BB" fill-rule="evenodd" d="M0 14.5h6.533V.5H0v14z" clip-rule="evenodd"/>
                            </g>
                          </svg>
                          France (+33)
                        </span>
                                                    </button>
                                                </li>
                                                <li>
                                                    <button type="button"
                                                            class="inline-flex w-full rounded-md px-3 py-2 text-sm text-gray-500 hover:bg-gray-100 hover:text-gray-900 dark:text-gray-400 dark:hover:bg-gray-600 dark:hover:text-white"
                                                            role="menuitem">
                        <span class="inline-flex items-center">
                          <svg class="me-2 h-4 w-4" fill="none" viewBox="0 0 20 15">
                            <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                            <mask id="a" style="mask-type:luminance" width="20" height="15" x="0" y="0"
                                  maskUnits="userSpaceOnUse">
                              <rect width="19.6" height="14" y=".5" fill="#fff" rx="2"/>
                            </mask>
                            <g mask="url(#a)">
                              <path fill="#262626" fill-rule="evenodd" d="M0 5.167h19.6V.5H0v4.667z"
                                    clip-rule="evenodd"/>
                              <g filter="url(#filter0_d_374_135180)">
                                <path fill="#F01515" fill-rule="evenodd" d="M0 9.833h19.6V5.167H0v4.666z"
                                      clip-rule="evenodd"/>
                              </g>
                              <g filter="url(#filter1_d_374_135180)">
                                <path fill="#FFD521" fill-rule="evenodd" d="M0 14.5h19.6V9.833H0V14.5z"
                                      clip-rule="evenodd"/>
                              </g>
                            </g>
                            <defs>
                              <filter id="filter0_d_374_135180" width="19.6" height="4.667" x="0" y="5.167"
                                      color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                <feOffset/>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/>
                                <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_374_135180"/>
                                <feBlend in="SourceGraphic" in2="effect1_dropShadow_374_135180" result="shape"/>
                              </filter>
                              <filter id="filter1_d_374_135180" width="19.6" height="4.667" x="0" y="9.833"
                                      color-interpolation-filters="sRGB" filterUnits="userSpaceOnUse">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" result="hardAlpha"
                                               values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"/>
                                <feOffset/>
                                <feColorMatrix values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.06 0"/>
                                <feBlend in2="BackgroundImageFix" result="effect1_dropShadow_374_135180"/>
                                <feBlend in="SourceGraphic" in2="effect1_dropShadow_374_135180" result="shape"/>
                              </filter>
                            </defs>
                          </svg>
                          Germany (+49)
                        </span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="relative w-full">
                                            <input type="text" id="phone-input"
                                                   class="z-20 block w-full rounded-e-lg border border-s-0 border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:border-s-gray-700  dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500"
                                                   pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890"
                                                   required/>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <div class="mb-2 flex items-center gap-2">
                                        <label for="select_country_input_billing_modal"
                                               class="block text-sm font-medium text-gray-900 dark:text-white">
                                            Country* </label>
                                    </div>
                                    <select id="select_country_input_billing_modal"
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500">
                                        <option selected>United States</option>
                                        <option value="AS">Australia</option>
                                        <option value="FR">France</option>
                                        <option value="ES">Spain</option>
                                        <option value="UK">United Kingdom</option>
                                    </select>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <div class="mb-2 flex items-center gap-2">
                                        <label for="select_city_input_billing_modal"
                                               class="block text-sm font-medium text-gray-900 dark:text-white">
                                            City* </label>
                                    </div>
                                    <select id="select_city_input_billing_modal"
                                            class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500">
                                        <option selected>San Francisco</option>
                                        <option value="NY">New York</option>
                                        <option value="LA">Los Angeles</option>
                                        <option value="CH">Chicago</option>
                                        <option value="HU">Houston</option>
                                    </select>
                                </div>

                                <div class="col-span-2">
                                    <label for="address_billing_modal"
                                           class="mb-2 block text-sm font-medium text-gray-900 dark:text-white">
                                        Delivery
                                        Address* </label>
                                    <textarea id="address_billing_modal" rows="4"
                                              class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                              placeholder="Enter here your address"></textarea>
                                </div>
                                <div class="col-span-2 sm:col-span-1">
                                    <label for="company_name"
                                           class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> Company
                                        name </label>
                                    <input type="text" id="company_name"
                                           class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                           placeholder="Flowbite LLC"/>
                                </div>

                                <div class="col-span-2 sm:col-span-1">
                                    <label for="vat_number"
                                           class="mb-2 block text-sm font-medium text-gray-900 dark:text-white"> VAT
                                        number </label>
                                    <input type="text" id="vat_number"
                                           class="block w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 focus:border-primary-500 focus:ring-primary-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder:text-gray-400 dark:focus:border-primary-500 dark:focus:ring-primary-500"
                                           placeholder="DE42313253"/>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 pt-4 dark:border-gray-700 md:pt-5">
                                <button type="submit"
                                        class="me-2 inline-flex items-center rounded-lg bg-primary-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-primary-800 focus:outline-none focus:ring-4 focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                                    Save information
                                </button>
                                <button type="button" data-modal-toggle="accountInformationModal2"
                                        class="me-2 rounded-lg border border-gray-200 bg-white px-5 py-2.5 text-sm font-medium text-gray-900 hover:bg-gray-100 hover:text-primary-700 focus:z-10 focus:outline-none focus:ring-4 focus:ring-gray-100 dark:border-gray-600 dark:bg-gray-800 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white dark:focus:ring-gray-700">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>