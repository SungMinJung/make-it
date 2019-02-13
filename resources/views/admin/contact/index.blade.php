@extends('gentelella.app')

@section('content')
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
        @foreach ($contacts as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->contact_name }}</a></td>
                <td>{{ $item->contact_email }}</td>
                <td>{{ $item->created_at }}</td>
                {{-- <td><a href="{{ route('admin.contact.show', $item->id) }}">보기</a></td> --}}
                <td><button onclick="location.href='{{ route('admin.contact.show', $item->id) }}'">보기</button></td>
                <td>
                    <form action="{{ route('admin.contact.destroy', $item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit">삭제</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $contacts->render() }}
@endsection