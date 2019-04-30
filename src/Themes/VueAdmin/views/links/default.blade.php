@if ($paginator->hasPages())
    <el-pagination background
                   @current-change="(p) => { __load(__url.resolve('{{ $paginator->url(0) }}', '?page='+p)) }"
                   :current-page="{{ $paginator->currentPage() }}"
                   :page-size="{{ $paginator->perPage() }}"
                   layout="total, prev, pager, next, jumper"
                   :total="{{ $paginator->total() }}">
    </el-pagination>
@endif

