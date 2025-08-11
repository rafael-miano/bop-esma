@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge([
    'class' => '
        bg-white/30 
        dark:bg-white/10 
        backdrop-blur-md 
        ring-1 
        ring-white/20 
        border 
        border-white/20 
        text-black 
        dark:text-white 
        placeholder-white/70 
        focus:border-red-500 
        dark:focus:border-red-500 
        focus:ring-red-500 
        dark:focus:ring-red-500 
        rounded-md 
        shadow-sm
    '
]) }}>
