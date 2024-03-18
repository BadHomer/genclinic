import { configureStore } from '@reduxjs/toolkit'
import recordModalStateReducer from "@/core/store/recordModalState/recordModalStateReducer";
import {newsApi} from "@/core/api/newsApi";
import {specsApi} from "@/core/api/specialitiesApi";
// ...

export const store = configureStore({
    reducer: {
        recordModalState: recordModalStateReducer,
        [newsApi.reducerPath]: newsApi.reducer,
        [specsApi.reducerPath]: specsApi.reducer,
    },
    middleware: (getDefaultMiddleware) =>
        getDefaultMiddleware()
            .concat(newsApi.middleware)
            .concat(specsApi.middleware),
})

// Infer the `RootState` and `AppDispatch` types from the store itself
export type RootState = ReturnType<typeof store.getState>
// Inferred type: {posts: PostsState, comments: CommentsState, users: UsersState}
export type AppDispatch = typeof store.dispatch

export type AppStore = typeof store;
