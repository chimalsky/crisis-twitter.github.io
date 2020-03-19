@extends('_layouts.master')

@section('body')

<section>
    <main class="" x-data="{ 
        original: true, 
        toggle() { 
            this.original = !this.original 
        } }">
        <header class="flex inline justify-end">
            <span id="toggle" 
            :class="{ 'bg-gray-200': !original, 'bg-blue-400': original }" 
            class="relative inline-block flex-shrink-0 h-6 w-11 mx-4
                border-2 border-transparent rounded-full cursor-pointer 
                transition-colors ease-in-out duration-200 focus:outline-none 
                focus:shadow-outline" 
            role="checkbox" tabindex="0" 
            @click="toggle()" 
            @keydown.space.prevent="toggle()" 
            :aria-checked="original.toString()">
                <span aria-hidden="true" :class="{ 'translate-x-5': original, 'translate-x-0': !original }" 
                    class="inline-block h-5 w-5 rounded-full bg-white shadow transform transition 
                        ease-in-out duration-200">
                </span>
            </span>
        </header> 

        <h1>
            Twitter needs a Crisis-Verified System 
        </h1>

        <p>
            When people are looking for news and information, 
            they turn to Twitter to find out what’s happening in the world right now. 
            This is especially true during 
            <span x-show="original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                elections,
            </span>
            <span x-show="!original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                crises,
            </span>
            where Twitter has become the first place 
            <span x-show="original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                voters
            </span>
            <span x-show="!original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                people
            </span>
            go to seek accurate information, resources, and breaking news from 
            journalists, 
            <span x-show="!original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                leaders,
            </span>
            <span x-show="original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                political candidates,
            </span>
            and 
            <span x-show="!original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                experts -- medical staff, researchers, 
                emergency managers.
            </span>
            <span x-show="original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                elected officials.
            </span>
        </p>

        <p>
            We understand the significance of this responsibility and our teams are building new ways for people who use Twitter to identify original sources and authentic information.
        </p>

        <p>
            With that goal in mind, today we are introducing 
            <span x-show="!original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                specialized experts
            </span>
            <span x-show="original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                US election
            </span>
            labels for 
            <span x-show="!original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                verified experts on the frontlines of the current pandemic.
            </span>
            <span x-show="original" 
            class="bg-blue-100 cursor-pointer hover:bg-blue-200 hover:text-black px-1">
                specified candidates running in the 2018 US midterm general election.            
            </span>
        </p>
    </main>

    <h2 class="mt-16"> 
        The above almost plagiarizes an actual 
        <a class="" target="_blank"
            href="https://blog.twitter.com/official/en_us/topics/company/2018/introducing-us-election-labels-for-midterm-candidates.html">
            blog post
        </a>...
    </h2>
    <p>
        ...by Twitter in response to the problem of misinformation in previous elections.
        If you toggle the switch at the top-right you'll see just how similar they are.

        <img class="min-w-full mt-4" src="/assets/img/verified-profile.jpeg" />
    </p>

    <footer>
        
    </footer>
</section>

<section class="mt-16">
    <h1>
        Twitter <span class="italic">could</span> 
        become the central 
        communication hub
        that we need right now.
    </h1>

    <p>
        The missing feature is a verification system suited for 
        the current crisis. The current verifcation system  
        works during <span class="italic">peacetime</span>. 
        It protects celebrities from being impersonated and 
        prevents the spread of most misinformation. Right 
        now we need to improve the signal to noise ratio. 
        Not just for citizens who want to stay engaged with 
        what's going on without going crazy in the fire-hose 
        of information, but also the emergency personnel themselves.
    </p>

    <p>
        Right now ther's no way to discern why an account is verified. 
        Is it a comedian? Are they a politician? Some influential CEO? 
        How much better would it be, if we could have verified 
    </p>

    <img class="min-w-full mt-4" src="/assets/img/crisis-verified-badges.jpeg" />
    <img class="min-w-full mt-4" src="/assets/img/crisis-verified-profile.jpeg" />

    <blockquote>
        We understand the significance of this responsibility and our teams are building new ways for people who use Twitter to identify original sources and authentic information.
    </blockquote>

</section>
    
<script>
    let toggle = document.querySelector('#toggle')

    demoToggle(800)
    demoToggle(1400)
    demoToggle(2000)
    
    function demoToggle(delay) {
        setTimeout(function() {
            toggle.click()
        }, delay)
    }
</script>
@stop
