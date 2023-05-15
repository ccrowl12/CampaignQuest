var defaultThreads = [
    {
        id: 1,
        title: "Thread 1",
        author: "Chase",
        date: Date.now(),
        content: "Thread content",
        comments: [
            {
                author: "Gevin",
                date: Date.now(),
                content: "Hey there"
            },
            {
                author: "Chase",
                date: Date.now(),
                content: "Hey to you too"
            }
        ]
    },
    {
        id: 2,
        title: "Thread 2",
        author: "Chase",
        date: Date.now(),
        content: "Thread content 2",
        comments: [
            {
                author: "Gevin",
                date: Date.now(),
                content: "Hey there"
            },
            {
                author: "Chase",
                date: Date.now(),
                content: "Hey to you too"
            }
        ]
    }
]

var threads = defaultThreads
if (localStorage && localStorage.getItem('threads')) {
    threads = JSON.parse(localStorage.getItem('threads'));
} else {
    threads = defaultThreads;
    localStorage.setItem('threads', JSON.stringify(defaultThreads));
}