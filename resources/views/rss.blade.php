<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ {{url('')}}  ]]></title>
        <link><![CDATA[ {{url('feed')}} ]]></link>
         
        <description><![CDATA[ ]]></description>
  
        <language>id</language>
        <pubDate>{{ now() }}</pubDate>
        
        @foreach($dataMateri as $materi)
            <item>
                <title><![CDATA[{{ $materi->judul }}]]></title>
                <link>{{ $materi->slug_judul }}</link>
                <description><![CDATA[{!! $materi->content !!}]]></description>
                <category>{{ $materi->kategori }}</category>
                <author><![CDATA[adminbimtek]]></author>
                <guid>{{ $materi->id }}</guid>
                <pubDate>{{ $materi->created_at->toRssString() }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>