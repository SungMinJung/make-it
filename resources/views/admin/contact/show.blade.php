@extends('gentelella.app')

@section('content')

번호 : {{ $contact->id }}
이름 : {{ $contact->contact_name }}
전화번호 : {{ $contact->contact_tel }}
이메일 : {{ $contact->contact_email }}
사이트 : {{ $contact->contact_refsite }}
내용 : {{ $contact->contact_content }}
작성일 : {{ $contact->created_at }}

@endsection