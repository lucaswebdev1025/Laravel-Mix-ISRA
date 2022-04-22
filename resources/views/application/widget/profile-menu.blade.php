<div class="acc-bar">
    <div class="acc-bar-btn">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
             viewBox="0 0 394.971 394.971" style="enable-background:new 0 0 394.971 394.971;" xml:space="preserve">
              <path d="M56.424,146.286c-28.277,0-51.2,22.923-51.2,51.2s22.923,51.2,51.2,51.2s51.2-22.923,51.2-51.2
                S84.701,146.286,56.424,146.286z M56.424,227.788L56.424,227.788c-16.735,0-30.302-13.567-30.302-30.302
                s13.567-30.302,30.302-30.302c16.735,0,30.302,13.567,30.302,30.302S73.16,227.788,56.424,227.788z"/>
            <path d="M379.298,187.037H143.151c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449h236.147
                c5.771,0,10.449-4.678,10.449-10.449S385.069,187.037,379.298,187.037z"/>
            <path d="M56.424,0c-28.277,0-51.2,22.923-51.2,51.2s22.923,51.2,51.2,51.2s51.2-22.923,51.2-51.2S84.701,0,56.424,0z
                M56.424,81.502c-16.735,0-30.302-13.567-30.302-30.302s13.567-30.302,30.302-30.302S86.726,34.465,86.726,51.2
                S73.16,81.502,56.424,81.502z"/>
            <path d="M143.151,61.649h236.147c5.771,0,10.449-4.678,10.449-10.449s-4.678-10.449-10.449-10.449H143.151
                c-5.771,0-10.449,4.678-10.449,10.449S137.38,61.649,143.151,61.649z"/>
            <path d="M56.424,292.571c-28.277,0-51.2,22.923-51.2,51.2c0,28.277,22.923,51.2,51.2,51.2s51.2-22.923,51.2-51.2
                C107.624,315.494,84.701,292.571,56.424,292.571z M86.726,343.771c0,16.735-13.567,30.302-30.302,30.302v0
                c-16.735,0-30.302-13.567-30.302-30.302c0-16.735,13.567-30.302,30.302-30.302S86.726,327.036,86.726,343.771L86.726,343.771z"/>
            <path d="M379.298,333.322H143.151c-5.771,0-10.449,4.678-10.449,10.449s4.678,10.449,10.449,10.449h236.147
                c5.771,0,10.449-4.678,10.449-10.449S385.069,333.322,379.298,333.322z"/>
        </svg>
    </div>
    <div class="acc-bar-h">
        <div class="acc-bar-h__icon">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 490.667 490.667" style="enable-background:new 0 0 490.667 490.667;" xml:space="preserve">
              <path d="M245.333,0C110.059,0,0,110.059,0,245.333s110.059,245.333,245.333,245.333s245.333-110.059,245.333-245.333
                S380.608,0,245.333,0z M245.333,469.333c-123.52,0-224-100.48-224-224s100.48-224,224-224s224,100.48,224,224
                S368.853,469.333,245.333,469.333z"/>
                <path d="M245.333,234.667c-76.459,0-138.667,62.208-138.667,138.667c0,5.888,4.779,10.667,10.667,10.667S128,379.221,128,373.333
                C128,308.629,180.629,256,245.333,256s117.333,52.629,117.333,117.333c0,5.888,4.779,10.667,10.667,10.667
                c5.888,0,10.667-4.779,10.667-10.667C384,296.875,321.792,234.667,245.333,234.667z"/>
                <path d="M245.333,64c-41.173,0-74.667,33.493-74.667,74.667s33.493,74.667,74.667,74.667S320,179.84,320,138.667
                S286.507,64,245.333,64z M245.333,192C215.936,192,192,168.064,192,138.667s23.936-53.333,53.333-53.333
                s53.333,23.936,53.333,53.333S274.731,192,245.333,192z"/>
          </svg>
        </div>
        <h1 class="acc-bar-h-title">{{ __('Personal Cabinet') }}</h1>
    </div>
    <div class="acc-compl">
        <span class="acc-compl-text"> {!! __('Your Profile is :percent Compete', ['percent' => '<span class="acc-compl-number" data-fullness="20"></span>']) !!}</span>
        <div class="acc-compl-placeholder">
            <div class="acc-compl-progress"></div>
        </div>
    </div>
    <div class="acc-prof">
        <div class="acc-prof-avatar">
            <img src="{{ auth()->user()->image->getThumbUrl(64, 64) }}" width="64px" height="64px" alt="avatar">
        </div>
        <div class="acc-prof-t">
            <div class="acc-prof-name">{{ auth()->user()->full_name }}</div>
            <div class="acc-prof-email">{{ auth()->user()->email }}</div>
        </div>
    </div>

    <div class="acc-tabs">
        <div class="acc-tabs-item {{ request()->routeIs('account') ? 'active' : '' }}">
            <div class="acc-tabs__icon">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 96 96"><path d="M95.209,25.7A4,4,0,0,0,92,24.087H32v8H86.624L83.05,44H40v8H80.65L77.024,64.087H31.017l-15.171-53.1a4,4,0,0,0-3.817-2.9L.029,8l-.058,8,9.006.065L24.154,69.186A4,4,0,0,0,28,72.087H38.613a12,12,0,1,0,2.774,0H66.613a12,12,0,1,0,2.774,0H80a4,4,0,0,0,3.832-2.851l12-40A4,4,0,0,0,95.209,25.7ZM44,84a4,4,0,1,1-4-4A4,4,0,0,1,44,84Zm28,0a4,4,0,1,1-4-4A4,4,0,0,1,72,84Z"/></svg>
            </div>
            <a href="{{ route('account') }}" class="acc-tabs-label link-arrow">{{ __('Personal Information') }}</a>
        </div>
        <div class="acc-tabs-item {{ request()->routeIs('account.orders.create.*') || request()->routeIs('account.orders.create') ? 'active' : '' }}">
            <div class="acc-tabs__icon">
                <svg enable-background="new 0 0 512.015 512.015" viewBox="0 0 512.015 512.015" xmlns="http://www.w3.org/2000/svg"><path d="m79.267 190.466h224.934c8.284 0 15-6.716 15-15s-6.716-15-15-15h-224.934c-19.812.705-19.93 29.246 0 30z"/><path d="m159.6 417.532h-80.333c-19.854.725-19.89 29.26 0 30h80.333c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><path d="m79.267 254.732h224.934c8.284 0 15-6.716 15-15s-6.716-15-15-15h-224.934c-19.812.706-19.93 29.246 0 30z"/><path d="m393.186 274.169c-3.272 0-6.513.139-9.719.4v-163.37c0-26.632-21.693-47.133-47.134-47.133h-51.697c-6.632-20.221-26.714-33.442-48.215-32.133-14.48-42.589-74.912-42.563-89.376 0-21.502-1.308-41.583 11.913-48.214 32.133h-51.697c-25.44-.001-47.134 20.499-47.134 47.133v353.467c0 26.575 21.648 47.133 47.134 47.133h289.199c7.755 0 15.15-1.913 21.693-5.311 74.433 24.321 155.305-34.899 153.972-113.505.002-65.513-53.298-118.814-118.812-118.814zm-249.653-212.237h16.067c8.284 0 15-6.732 15-15.016 0-9.438 7.687-17.117 17.134-17.117s17.134 7.686 17.134 17.133c0 8.284 6.716 15 15 15h16.066c9.334 0 17.133 7.502 17.133 17.133 0 9.488-7.705 17.133-17.133 17.133h-96.4c-9.447 0-17.133-7.686-17.133-17.133-.001-9.617 7.783-17.133 17.132-17.133zm-96.399 419.867c-9.396 0-17.134-7.612-17.134-17.133v-353.467c0-9.636 7.804-17.133 17.134-17.133h51.728c6.281 18.655 23.926 32.133 44.671 32.133h96.4c20.425 0 38.372-13.211 44.699-32.133h51.7c9.334 0 17.134 7.501 17.134 17.133v169.806c-12.698 4.518-24.407 11.136-34.708 19.438-1.599-6.565-7.502-11.444-14.558-11.444h-224.934c-19.826.712-19.916 29.251 0 30h221.022c-8.135 10.194-14.629 21.75-19.082 34.267h-201.939c-8.284 0-15 6.716-15 15s6.716 15 15 15h195.503c-3.332 37.866 12.737 75.017 39.585 98.533zm346.052 0c-48.973 0-88.815-39.842-88.815-88.814 4.465-117.664 173.182-117.632 177.63.001-.001 48.971-39.843 88.813-88.815 88.813z"/><path d="m413.724 361.611-30.919 30.92-10.16-10.155c-5.859-5.857-15.357-5.856-21.213.004-5.856 5.859-5.854 15.356.004 21.213 0 0 20.766 20.758 20.766 20.758 5.858 5.856 15.354 5.855 21.211-.002 0 0 41.524-41.524 41.524-41.524 5.858-5.857 5.858-15.355 0-21.213s-15.356-5.858-21.213-.001z"/></svg>
            </div>
            <a href="{{ route('account.orders.create') }}" class="acc-tabs-label link-arrow">{{ __('Order Now') }}</a>
        </div>
        <div class="acc-tabs-item {{ request()->routeIs('account.orders') ? 'active' : '' }}">
            <div class="acc-tabs__icon">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path d="M379.721,281.694c-63.495,0-115.153,51.658-115.153,115.153S316.226,512,379.721,512s115.153-51.658,115.153-115.153
                  S443.217,281.694,379.721,281.694z M366.27,445.1l-43.331-42.893l21.133-21.348l22.03,21.808l49.183-49.455l21.299,21.182
                  L366.27,445.1z"/>
                    <path d="M238.534,0L17.126,127.83v255.66l221.408,127.83l32.238-18.612c-6.645-7.542-12.52-15.777-17.502-24.582l-14.736,8.507
                  l-15.02-8.672v-203.63L47.166,162.517v-17.344l15.02-8.672l176.348,101.815l73.154-42.236L135.34,94.266l30.04-17.343
                  l176.348,101.814l73.154-42.236l15.02,8.672v17.344L253.554,264.331v60.729c25.025-43.81,72.203-73.406,126.168-73.406
                  c29.636,0,57.222,8.933,80.221,24.236V127.83L238.534,0z"/>
            </svg>
            </div>
            <a href="{{ route('account.orders') }}" class="acc-tabs-label link-arrow">{{ __('My Orders') }}</a>
        </div>
        <div class="acc-tabs-item {{ request()->routeIs('account.orders.history') ? 'active' : '' }}">
            <div class="acc-tabs__icon">
                <svg enable-background="new 0 0 512.015 512.015" viewBox="0 0 512.015 512.015" xmlns="http://www.w3.org/2000/svg"><path d="m79.267 190.466h224.934c8.284 0 15-6.716 15-15s-6.716-15-15-15h-224.934c-19.812.705-19.93 29.246 0 30z"/><path d="m159.6 417.532h-80.333c-19.854.725-19.89 29.26 0 30h80.333c8.284 0 15-6.716 15-15s-6.716-15-15-15z"/><path d="m79.267 254.732h224.934c8.284 0 15-6.716 15-15s-6.716-15-15-15h-224.934c-19.812.706-19.93 29.246 0 30z"/><path d="m393.186 274.169c-3.272 0-6.513.139-9.719.4v-163.37c0-26.632-21.693-47.133-47.134-47.133h-51.697c-6.632-20.221-26.714-33.442-48.215-32.133-14.48-42.589-74.912-42.563-89.376 0-21.502-1.308-41.583 11.913-48.214 32.133h-51.697c-25.44-.001-47.134 20.499-47.134 47.133v353.467c0 26.575 21.648 47.133 47.134 47.133h289.199c7.755 0 15.15-1.913 21.693-5.311 74.433 24.321 155.305-34.899 153.972-113.505.002-65.513-53.298-118.814-118.812-118.814zm-249.653-212.237h16.067c8.284 0 15-6.732 15-15.016 0-9.438 7.687-17.117 17.134-17.117s17.134 7.686 17.134 17.133c0 8.284 6.716 15 15 15h16.066c9.334 0 17.133 7.502 17.133 17.133 0 9.488-7.705 17.133-17.133 17.133h-96.4c-9.447 0-17.133-7.686-17.133-17.133-.001-9.617 7.783-17.133 17.132-17.133zm-96.399 419.867c-9.396 0-17.134-7.612-17.134-17.133v-353.467c0-9.636 7.804-17.133 17.134-17.133h51.728c6.281 18.655 23.926 32.133 44.671 32.133h96.4c20.425 0 38.372-13.211 44.699-32.133h51.7c9.334 0 17.134 7.501 17.134 17.133v169.806c-12.698 4.518-24.407 11.136-34.708 19.438-1.599-6.565-7.502-11.444-14.558-11.444h-224.934c-19.826.712-19.916 29.251 0 30h221.022c-8.135 10.194-14.629 21.75-19.082 34.267h-201.939c-8.284 0-15 6.716-15 15s6.716 15 15 15h195.503c-3.332 37.866 12.737 75.017 39.585 98.533zm346.052 0c-48.973 0-88.815-39.842-88.815-88.814 4.465-117.664 173.182-117.632 177.63.001-.001 48.971-39.843 88.813-88.815 88.813z"/><path d="m413.724 361.611-30.919 30.92-10.16-10.155c-5.859-5.857-15.357-5.856-21.213.004-5.856 5.859-5.854 15.356.004 21.213 0 0 20.766 20.758 20.766 20.758 5.858 5.856 15.354 5.855 21.211-.002 0 0 41.524-41.524 41.524-41.524 5.858-5.857 5.858-15.355 0-21.213s-15.356-5.858-21.213-.001z"/></svg>
            </div>
            <a href="{{ route('account.orders.history') }}" class="acc-tabs-label link-arrow">{{ __('Order History') }}</a>
        </div>
        <div class="acc-tabs-item {{ request()->routeIs('account.payments') ? 'active' : '' }}">
            <div class="acc-tabs__icon">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path d="M391.84,48.87l54.306,45.287c3.739,3.119,8.281,4.641,12.798,4.641c5.729,0,11.415-2.448,15.371-7.191
                  c7.074-8.483,5.932-21.095-2.552-28.169L417.457,18.15c-8.481-7.074-21.094-5.933-28.169,2.551
                  C382.214,29.184,383.356,41.795,391.84,48.87z"/>
                    <path d="M53.057,98.797c4.516,0,9.059-1.522,12.798-4.641L120.16,48.87c8.483-7.074,9.626-19.686,2.552-28.169
                  c-7.073-8.482-19.686-9.625-28.169-2.551L40.237,63.437c-8.483,7.074-9.626,19.686-2.552,28.169
                  C41.642,96.349,47.328,98.797,53.057,98.797z"/>
                    <path d="M422.877,109.123C383.051,69.297,331.494,45.474,276,40.847V20c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20v20.847
                  c-55.494,4.627-107.051,28.449-146.877,68.275C44.548,153.697,20,212.962,20,276s24.548,122.303,69.123,166.877
                  C133.697,487.452,192.962,512,256,512c50.754,0,99.118-15.869,139.864-45.894c8.893-6.552,10.789-19.072,4.237-27.965
                  c-6.553-8.894-19.074-10.789-27.966-4.237C338.313,458.827,298.154,472,256,472c-108.075,0-196-87.925-196-196S147.925,80,256,80
                  s196,87.925,196,196c0,33.01-8.354,65.638-24.161,94.356c-5.326,9.677-1.799,21.839,7.878,27.165
                  c9.674,5.324,21.838,1.8,27.165-7.878C481.931,355.032,492,315.735,492,276C492,212.962,467.452,153.697,422.877,109.123z"/>
                    <path d="M353.434,155.601c-8.584-6.947-21.178-5.622-28.128,2.965l-63.061,77.925C260.209,236.17,258.124,236,256,236
                  c-22.056,0-40,17.944-40,40c0,22.056,17.944,40,40,40c22.056,0,40-17.944,40-40c0-5.052-0.951-9.884-2.668-14.338l63.067-77.933
                  C363.348,175.142,362.021,162.548,353.434,155.601z"/>
            </svg>
            </div>
            <a href="{{ route('account.payments') }}" class="acc-tabs-label link-arrow">{{ __('Payment History') }}</a>
        </div>

        <div class="acc-tabs-item">
            <div class="acc-tabs__icon">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <path d="M510.371,226.517c-1.088-2.624-2.645-4.971-4.629-6.955l-63.979-63.979c-8.341-8.341-21.824-8.341-30.165,0
                  c-8.341,8.341-8.341,21.824,0,30.165l27.584,27.584h-55.168v-192C384.013,9.557,374.477,0,362.68,0H21.347
                  c-0.768,0-1.451,0.32-2.197,0.405c-1.024,0.107-1.92,0.277-2.901,0.533c-2.219,0.555-4.245,1.429-6.123,2.624
                  c-0.469,0.299-1.067,0.32-1.515,0.661C8.44,4.352,8.376,4.587,8.205,4.715C5.88,6.549,3.939,8.789,2.531,11.456
                  c-0.299,0.576-0.363,1.195-0.597,1.792c-0.683,1.621-1.429,3.2-1.685,4.992c-0.107,0.64,0.085,1.237,0.064,1.856
                  c-0.021,0.427-0.299,0.811-0.299,1.237V448c0,10.176,7.189,18.923,17.152,20.907l213.333,42.667
                  c1.387,0.299,2.795,0.427,4.181,0.427c4.885,0,9.685-1.685,13.525-4.843c4.928-4.053,7.808-10.091,7.808-16.491v-21.333H362.68
                  c11.797,0,21.333-9.557,21.333-21.333V256h55.168l-27.584,27.584c-8.341,8.341-8.341,21.824,0,30.165
                  c4.16,4.16,9.621,6.251,15.083,6.251s10.923-2.091,15.083-6.251l63.979-63.979c1.984-1.984,3.541-4.331,4.629-6.955
                  C512.525,237.611,512.525,231.723,510.371,226.517z M191.373,325.184c-2.432,9.685-11.115,16.149-20.672,16.149
                  c-1.707,0-3.456-0.192-5.184-0.64l-42.667-10.667c-11.435-2.859-18.389-14.443-15.531-25.877
                  c2.837-11.413,14.379-18.432,25.856-15.509l42.667,10.667C187.277,302.165,194.232,313.749,191.373,325.184z M341.347,426.667
                  h-85.333V85.333c0-9.408-6.187-17.728-15.211-20.437l-74.091-22.229h174.635V426.667z"/>
            </svg>
            </div>
            <div class="acc-tabs-label link-arrow">
                <a href="#" onclick="document.getElementById('top-bar-logout').submit();">
                    {{ __('Logout') }}
                </a>
            </div>
        </div>
    </div>
</div>
