@props(['ckeditorSelector','field'])
<script>

    document.addEventListener('DOMContentLoaded', () => {
        // Scroll on top when the node is updated.
        Livewire.on('gotoTop', () => {
            window.scrollTo({
                top: 15,
                left: 15,
                behaviour: 'smooth'
            })
        });

    });
    ClassicEditor.create(document.querySelector( '{{ $ckeditorSelector }} '), {
        simpleUpload: {
            uploadUrl: "{{route('file.upload', ['_token' => csrf_token() ])}}",
        },
        codeBlock: {
            languages: [
                // Use the "php-code" class for PHP code blocks.
                {language: 'php', label: 'PHP', class: 'php-code'},
                {language: 'plaintext', label: 'Plain text', class: ''},

                // Use the "js" class for JavaScript code blocks.
                // Note that only the first ("js") class will determine the language of the block when loading data.
                {language: 'javascript', label: 'JavaScript', class: 'language-html'},

            ]
        },
    })
        .then(editor => {
            editor.model.document.on('change:data', () => {
            @this.set('{{ $field }}', editor.getData());
            });
        })
        .catch(error => {
            console.error(error);
        });


</script>
