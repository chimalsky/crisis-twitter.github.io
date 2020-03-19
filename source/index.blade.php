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
            :class="{ 'bg-gray-200': original, 'bg-blue-400': !original }" 
            class="relative inline-block flex-shrink-0 h-6 w-11 mx-4
                border-2 border-transparent rounded-full cursor-pointer 
                transition-colors ease-in-out duration-200 focus:outline-none 
                focus:shadow-outline" 
            role="checkbox" tabindex="0" 
            @click="toggle()" 
            @keydown.space.prevent="toggle()" 
            :aria-checked="original.toString()">
                <span aria-hidden="true" :class="{ 'translate-x-5': !original, 'translate-x-0': original }" 
                    class="inline-block h-5 w-5 rounded-full bg-white shadow transform transition 
                        ease-in-out duration-200">
                </span>
            </span>
        </header> 

        <h1 x-show="!original" class="flex justify-between items-center">
            <span>
                Twitter needs a Crisis-Verified Labels
            </span>
            <span class="text-gray-300 text-3xl font-extrabold">
                2020 
            </span>
        </h1>
        <h1 x-show="original" class="flex justify-between">
            <span>
                Introducing US Election Labels for Midterm Candidates
            </span>
            <span class="text-gray-300 text-3xl font-extrabold">
                2018
            </span>
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
        The above doesn't exist yet...
    </h2>
    <p>
        ...but it nearly plagiarizes an actual 
        <a class="" target="_blank"
            href="https://blog.twitter.com/official/en_us/topics/company/2018/introducing-us-election-labels-for-midterm-candidates.html">
            blog post
        </a> Twitter used to announce US Election Labels to combat the 
        problem of misinformation during elections.
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

    <h2>
        The missing piece is a  
        verification system suited for 
        the current crisis. 
    </h2>

    <p>
        The generally applied
        <span class="text-blue-600">blue check mark</span>
        works during peacetime:
        it protects celebrities from being impersonated and 
        prevents the spread of most misinformation. But, right 
        now Twitter isn't being used primarily to keep up to date 
        on the latest celebrity gossip or other peacetime information. 
        Right now it's a crisis, and the information feed is too much.
    </p>

    <p>
        At a time like this communication, the ability
        for emergency personnel like doctors, to learn 
        from each other is the keystone feature. 
    </p>
    
    <p>
        But the signal to noise ratio must be improved. 
        There are many tweets blowing up sharing stories 
        about how some doctor did something somewhere. 
        But with so many of these 'i heard' stories going 
        around with no way to trace it back to a verified 
        source, trying to stay updated on Twitter feels 
        like drinking from a fire-hose.
    </p>

    <p>
        Implement a <strong>Crisis-Verified</strong> badge 
        so that we can know an account belongs to a Doctor in Seattle, 
        or a Paramedic in Berlin.
    </p>

    <div class="flex flex-wrap items-center mb-24">
        <div class="w-full lg:w-1/3 lg:pr-1">
            <img src="/assets/img/crisis-verified-badges.jpeg" />
        </div>
        <div class="w-full lg:w-2/3 lg:pl-1">
            <img src="/assets/img/crisis-verified-profile.jpeg" />
        </div>
    </div>

    <div class="mb-24">

        <p>
            There are talks about people developing a seperate 
            platform for crisis personnel to communicate. Some of 
            my friends and I were thinking the same. But once we 
            got the drawing board, and once we saw how the information 
            on Twitter was evolving, we became convinced that 
            the best solution would be one with the lowest barrier to critical mass. 
        </p>

        <h1>
            Twitter already is the go-to for the most recent frontline information. 
            We just need to augment the verification system so that the frontline 
            information can be put front and center against the noise.
        </h1>

        <p>
            During WW2, existing American factories were converted to manufacture 
            for the military. Right now Twitter already is a very capable factory. 
            They've been verifying accounts and supervising them. 
            They have a resilient infrastructure for enormous traffic. 
            They already have the mindshare.
        </p>
    </div>

    <p>
        Compare the 'fake post' we wrote above and compare it to the 
        actual post, you'll see that one paragraph has no differences:
    </p>

    <blockquote>
        We understand the significance of this responsibility and our teams are building new ways for people who use Twitter to identify original sources and authentic information.
    </blockquote>

    <p>
        The values underlying the 2018 'US Election Labels' is the same for 
        the suggested 'Crisis-Verified' labels. Twitter is prepared for this.
    </p>

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
