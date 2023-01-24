<div>
    <h3>
        <a href="{{ route('admin.index') }}">Admin menu</a>
    </h3>
    <ul>
        <li>
            <h4>
                <a href="{{ route('admin.project.index') }}">Projects</a>
            </h4>
            <ul>
                <li><a href="{{ route('admin.project.category.index') }}">Categories</a></li>
                <li><a href="{{ route('admin.project.tag.index') }}">Tags</a></li>
            </ul>
        </li>
    </ul>
</div>
