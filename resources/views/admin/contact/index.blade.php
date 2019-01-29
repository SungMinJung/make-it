<table>
    <thead>
        <tr>
            <th>번호</th>
            <th>이름</th>
            <th>이메일</th>
            <th>작성일</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contactuses as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td><a href="{{ route('contact.show', $item->id) }}">{{ $item->contact_name }}</a></td>
                <td>{{ $item->contact_email }}</td>
                <td>{{ $item->created_at }}</td>
                <form action="{{ route('contact.destroy', $item->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit">삭제</button>
                </form>
            </tr>
        @endforeach
    </tbody>
</table>